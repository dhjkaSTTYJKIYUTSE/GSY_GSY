<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25
 * Time: 16:59
 */

namespace app\index\controller;

use app\index\model\Cart as CartModel;
use think\Controller;

class Cart extends Controller
{
    public function add()
    {
        $member_id = $this->isLogin();
        //接收参数
        $goods_id = input("goods_id");
        $goods_num = input("goods_num");
        $data[$goods_id] = [
            'goods_id' => $goods_id,
            'goods_num' => $goods_num,
            'selected' => 1,
            'member_id' => $member_id,
        ];
        //判断是否登录
        if (!$member_id) {
            //未登录
            //存到cookie
            $cookie = cookie('cart');
            $cart = unserialize($cookie);
            if (!empty($cart)) {
                //cookie购物车有商品
                if (array_key_exists($goods_id, $cart)) {
                    //cookie购物车有该商品
                    $cart[$goods_id]['goods_num'] += input('goods_num');
                } else {
                    //cookie购物车没有该商品
                    $cart[$goods_id] = [
                        'goods_id' => input('goods_id'),
                        'goods_num' => input('goods_num'),
                        'selected' => 1,
                    ];
                }
                $str = serialize($cart);
                cookie('cart', $str);
            } else {
                //没有购物车商品
                $str = serialize($data);
                cookie('cart', $str);
            }
//            未登录，获取数据当在购物车点击加减时，获取数据
            $cookie = cookie('cart');
            $cart = unserialize($cookie);
            $data = CartModel::cartList($cart);

        } else {
            //已登录
            //查询用户的购物车情况  查询结果为二维数组
            $cartData = db('cart')->where(['member_id' => $member_id])->select();
            $arr = [
                'goods_id' => $goods_id,
                'goods_num' => $goods_num,
                'selected' => 1,
                'member_id' => $member_id,
            ];
            //判断该用户购物车表是否有数据
            if (!$cartData) {
                //该用户当购物车表没有数据
                db('cart')->insert($arr);
            } else {
                //该用户购物车表有数据
                //遍历数组，将数值键名改为 goods_id
                foreach ($cartData as $k => $v) {
                    $cartData[$v['goods_id']] = $v;
                }
                //判断商品是否已经存在
                if (array_key_exists($goods_id, $cartData)) {
                    $cartData[$goods_id]['goods_num'] += $goods_num;
                    //更新数据库
                    db('cart')->update($cartData[$goods_id]);
                } else {
                    //插入新数据
                    db('cart')->insert($arr);
                }
            }
            //            已登录，获取数据当在购物车点击加减时，获取数据
            if (!empty(cookie('cart'))) {
                $cookie = unserialize(cookie('cart'));
                cookie('cart', null);
                CartModel::addOrigin($cookie, $member_id);
            }
            $data = CartModel::cartMember($member_id);
        }

        return [
            'data' => $data['data'],
            'sum' => $data['sum'],
            'status' => 'success',
        ];
    }

    public function index()
    {
        //判断是否登录
        $member_id = $this->isLogin();
        if (!$member_id) {
            //用户未登录状态
            $cookie = cookie('cart');
            $cart = unserialize($cookie);
            $data = CartModel::cartList($cart);
        } else {
            //用户登录状态
            if (!empty(cookie('cart'))) {
                $cookie = unserialize(cookie('cart'));
                cookie('cart', null);
                CartModel::addOrigin($cookie, $member_id);
            }
            $data = CartModel::cartMember($member_id);
        }
        $this->assign([
            'data' => $data['data'],
            'sum' => $data['sum'],
        ]);
        return $this->fetch('cart/cart');
    }

    public function del()
    {
        $data = [
            'goods_id' => input('goods_id'),
            'member_id' => $this->isLogin(),
        ];
        //判断用户是否登录
        if ($data['member_id']) {
            //登录状态
            $cartData = CartModel::delOneGoods($data);

        } else {
            //未登录状态
            $cookie = cookie('cart');
            $cart = unserialize($cookie);
            unset($cart[$data['goods_id']]);
            $cookie = serialize($cart);
            cookie('cart', $cookie);
        }
        return [
            'status' => 'success',
        ];
    }
    public function isLogin()
    {
        $member = session('index');
        $member_id = $member['member_id'];
        return $member_id;
    }
    /*
     * 改变selected值
     */
    public function checkSelected(){
        $data = [
            'goods_id' => input('goods_id'),
            'member_id' => $this->isLogin(),
        ];
        //判断用户是否登录
        if ($data['member_id']) {
            //登录状态
            $sum = CartModel::checkSelected($data);
        } else {
            //未登录状态
            $cookie = cookie('cart');
            $cart = unserialize($cookie);
            //改变该商品的selected值
            if ($cart[$data['goods_id']]['selected']==1){
                $cart[$data['goods_id']]['selected']=0;
            }else{
                $cart[$data['goods_id']]['selected']=1;
            }
            //计算结果，提取总价
            $all = CartModel::cartList($cart);
            $data=serialize($cart);
            cookie('cart',$data);
            $sum=$all['sum'];
            $sum??0;
        }
        if ($sum!==false){
            //数据更改成功
            return [
                'sum' => $sum,
                'status' => 'success',
            ];
        }else{
            //数据更改不成功
        }


    }

}