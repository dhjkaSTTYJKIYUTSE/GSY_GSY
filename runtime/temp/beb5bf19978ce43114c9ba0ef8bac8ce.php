<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\PHPfile\GSY\public/../application/index\view\index\index.html";i:1506381953;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>一米市集Yimishiji|跟友善农夫，买一份诚食</title>
    <!--1.11.1-->
    <script src="__STATIC__/index/./js/jquery.min.js"></script>
    <script src="__STATIC__/index/./js/index.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/./css/index.css">
    <link rel="icon" href="__STATIC__/index/./img/favicon.ico" type="image/x-ico"/>
</head>
<body>
<!--顶部-->
<div class="top"></div>
<!--主要内容-->
<div class="container">
    <!--头部-->
    <?php echo widget('Widget/header'); ?>
    <!--nav-->
    <div class="nav">
        <div class="navImg">
            <img src="__STATIC__/index/img/nav1.jpg" alt="717美食5件5折">
        </div>
        <div class="navBtn">
            <ul class="borderD">
                <li>亲子买菜基金</li>
                <li>极致新鲜</li>
                <li>满额立减</li>
                <li>购物纸袋回收计划</li>
                <li>中伏吃面</li>
            </ul>
        </div>
    </div>
    <!--新鲜上市-->
    <div class="div1 borderD">
        <ul>
            <li>
                <dl>
                    <dd><img src="__STATIC__/index/./img/top1.jpg" alt=""></dd>
                    <dt>
                    <h4><a href="#">海拔3300米小金青苹果</a></h4>
                    <p>川藏高原独特的气候环境给予最自然的味道；生产过程不用农药、化肥和除草剂 ,果实甘甜可口，吸引周边鸟儿们每天来吃。</p>
                    </dt>
                </dl>
            </li>
            <li>
                <dl>
                    <dd><img src="__STATIC__/index/./img/top2.jpg" alt=""></dd>
                    <dt>
                    <h4><a href="#">膳博士冰鲜黑猪肉</a></h4>
                    <p>喝山中水，吃五谷杂粮、苜蓿草，慢慢长足10个月的「黑猪」，猪肉胶原蛋白丰富，鲜香美味。</p>
                    </dt>
                </dl>
            </li>
            <li>
                <dl>
                    <dd><img src="__STATIC__/index/./img/top3.jpg" alt=""></dd>
                    <dt>
                    <h4><a href="#">优惠专区</a></h4>
                    <p>在这个优惠自选区里，有很多好的食材值得一试，只要经过简单的处理，就可以享受到美食的味道。</p>
                    </dt>
                </dl>
            </li>
            <li>
                <dl>
                    <dd><img src="__STATIC__/index/./img/top4.jpg" alt=""></dd>
                    <dt>
                    <h4><a href="#">可以喝的沙拉</a></h4>
                    <p>均衡全食饮，可以喝的沙拉！1瓶包含10种蔬果、粗粮谷物、植物蛋白，维生素和酶的活性完整保存。红瓶抗氧化，绿瓶清肠道，健康好味道！</p>
                    </dt>
                </dl>
            </li>
        </ul>
    </div>
    <!--热购商品-->
    <div class="regou borderD divModel">
        <div class="regouLeft fl">
            <img src="__STATIC__/index/./img/regou.jpg" alt="" class="fl hImg">
            <div class="regou1 fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/./img/hot1.jpg" alt="" class="goodsImg">
                        <img src="__STATIC__/index/./img/new.png" alt="" class="youhuiImg">
                        <div class="numDiv" id="firNumDiv" >
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">果蔬净</a></h4>
                    <p>
                        <button>Soapnut Republic</button>
                        <span class="likeP">500ml</span>/瓶
                    </p>
                    <p class="money">￥<span class="money">50.00</span></p>
                    </dt>
                </dl>
            </div>
        </div>
        <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 69): ?>
        <div class="regouRight fl">
            <div class="regouR fl">
                <span class=""></span>
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/./img/new.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv" onclick="javascript:window.location.href='<?php echo url('Product/index',['goodsId'=>$val['goods_id']]); ?>'">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                    <p>
                        <button><?php echo $val['keywords']; ?></button>
                        <span class="likeP"><?php echo $val['unit']; ?></span>
                    </p>
                    <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div><!--2-->
        </div>
        <?php endif; endforeach; endforeach; ?>
    </div>
    <!--新到尖货-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/xindaojianhuo.jpg" alt=""></a>
            <a href="#"><h4>更多新到尖货 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 44): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv" onclick="javascript:window.location.href='<?php echo url('Product/index',['goodsId'=>$val['goods_id']]); ?>'">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
    <!--安全水果-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/anquanshuiguo.jpg" alt=""></a>
            <a href="#"><h4>更多安全水果 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 11): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv" onclick="javascript:window.location.href='<?php echo url('Product/index',['goodsId'=>$val['goods_id']]); ?>'">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                    <p>
                        <button><?php echo $val['keywords']; ?></button>
                        <span class="likeP"><?php echo $val['unit']; ?></span>
                    </p>
                    <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
    <!--四时菜蔬-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/sishishishu.jpg" alt=""></a>
            <a href="#"><h4>更多四时菜蔬 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 1): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv" onclick="javascript:window.location.href='<?php echo url('Product/index',['goodsId'=>$val['goods_id']]); ?>'">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
        </div>
    <!--肉禽蛋品-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/rouqindanpin.jpg" alt=""></a>
            <a href="#"><h4>更多肉禽蛋品 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 19): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv" onclick="javascript:window.location.href='<?php echo url('Product/index',['goodsId'=>$val['goods_id']]); ?>'">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
    <!--粮油酱醋-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/liangyoujiangchu.jpg" alt=""></a>
            <a href="#"><h4>更多粮油酱醋 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 61): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv" onclick="javascript:window.location.href='<?php echo url('Product/index',['goodsId'=>$val['goods_id']]); ?>'">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
    <!--水中鲜物-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/shuizhongxianwu.jpg" alt=""></a>
            <a href="#"><h4>更多水中鲜物 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 33): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv" onclick="javascript:window.location.href='<?php echo url('Product/index',['goodsId'=>$val['goods_id']]); ?>'">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
    <!--零食酒饮-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/lingshijiuyin.jpg" alt=""></a>
            <a href="#"><h4>更多零食酒饮 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 51): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv" onclick="javascript:window.location.href='<?php echo url('Product/index',['goodsId'=>$val['goods_id']]); ?>'">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
    <!--面点小食-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/miandianxiaoshi.jpg" alt=""></a>
            <a href="#"><h4>更多面点小食 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 39): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv" onclick="javascript:window.location.href='<?php echo url('Product/index',['goodsId'=>$val['goods_id']]); ?>'">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
    <!--乳制品类-->
    <div class="divModel ">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/ruzhidoupin.jpg" alt=""></a>
            <a href="#"><h4>更多乳制品类 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 26): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv" onclick="javascript:window.location.href='<?php echo url('Product/index',['goodsId'=>$val['goods_id']]); ?>'">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
</div>
<!--做个选择-->
<div class="chioseBg fc">
    <div class="chiose fc">
        <div class="logo fl">
            <img src="__STATIC__/index/./img/zuogexuanze.jpg" alt="">
        </div>
        <div class="data fl">
            <p>
                每一口放进嘴里的食物，从哪里来、如何耕种与饲养、如何采摘与包装等都会影响生态环境的可持续性。一米市集倡导有意念的吃，希望每个人都能关心食物的来历，在进食之前，想一想这些食物从产地搬到餐桌的一路上经历了什么，然后做个选择。</p>
        </div>
        <div class="menu fl">
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon4.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon3.jpg" alt="">
                <span>小农栽种</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon2.jpg" alt="">
                <span>无激抗</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon1.jpg" alt="">
                <span>天然无毒</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon0.jpg" alt="">
                <span>本地食材</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon9.jpg" alt="">
                <span>一米亲访</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon8.jpg" alt="">
                <span>古法手作</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon7.jpg" alt="">
                <span>无负面添加</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon6.jpg" alt="">
                <span>自然农法</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon5.jpg" alt="">
                <span>走地散养</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon14.jpg" alt="">
                <span>人道主义</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon13.jpg" alt="">
                <span>生态养殖</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon12.jpg" alt="">
                <span>野生捕捞</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon11.jpg" alt="">
                <span>优质产地</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon10.jpg" alt="">
                <span>无麸质</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon18.jpg" alt="">
                <span>草饲</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon17.jpg" alt="">
                <span>纯天然原料</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon16.jpg" alt="">
                <span>非转基因</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/select_icon15.jpg" alt="">
                <span>有机生产</span>
            </div>

        </div>
    </div>
</div>
<!--主要内容-->
<div class="container fc">
    <!--厨房格言-->
    <div class="kitchen borderT">
        <div class="logo fl">
            <img src="__STATIC__/index/./img/chufanggeyan.jpg" alt="">
        </div>
        <div class="contain fl">
            <div class="d1 fl">
                <img src="__STATIC__/index/./img/yu.jpg" alt="">
            </div>
            <div class="d2 fl">
                <h3>三文鱼冰鲜出击</h3>
                <p>
                    鲜艳的橙色，厚身的质地，层层叠叠的纹理，即使是静静地躺在浅浅的瓷盘里，三文鱼也发出诱惑的光芒，在喜爱它的人眼中，钻石切面的光辉也不过如此；用筷子夹起一块放入口中，鱼的极鮮美味也大抵如此。
                    <a href="">阅读更多...</a>
                </p>
            </div>
            <div class="d3 fc divModel">
                <div class="right fl">
                    <dl class="fl cook">
                    <dd>
                        <img src="__STATIC__/index/./img/cook1.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/./img/new.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href="">零农残佳沛绿果 4粒</a></h4>
                        <p>
                            <button>君禾园</button>
                            <span class="likeP">450</span>g/份
                        </p>
                        <p class="money">￥<span class="money">25.00</span></p>
                    </dt>
                </dl>
                    <dl class="fl cook">
                        <dd>
                            <img src="__STATIC__/index/./img/cook2.jpg" alt="" class="goodsImg">
                            <div class="youhuiDiv">
                                <img src="__STATIC__/index/./img/new.png" alt="" class="youhuiImg">
                            </div>
                            <div class="numDiv">
                                <span>0</span>
                                <button class="reduceBtn">-</button>
                                <button class="addBtn">+</button>
                            </div>
                        </dd>
                        <dt>
                            <h4><a href="">柠檬君的青柠檬 500g</a></h4>
                            <p>
                                <button>柠檬君</button>
                                <span class="likeP">500</span>g/份
                            </p>
                            <p class="money">￥<span class="money">30.00</span></p>
                        </dt>
                    </dl>
                    <dl class="fl cook">
                        <dd>
                            <img src="__STATIC__/index/./img/cook3.jpg" alt="" class="goodsImg">
                            <div class="youhuiDiv">
                                <img src="__STATIC__/index/./img/new.png" alt="" class="youhuiImg">
                            </div>
                            <div class="numDiv">
                                <span>0</span>
                                <button class="reduceBtn">-</button>
                                <button class="addBtn">+</button>
                            </div>
                        </dd>
                        <dt>
                            <h4><a href="">金凯利爱尔兰风味切达干酪 </a></h4>
                            <p>
                                <button>Kerrygold</button>
                                <span class="likeP">250</span>g/份
                            </p>
                            <p class="money">￥<span class="money">39.00</span></p>
                        </dt>
                    </dl>
                    <dl class="fl cook">
                        <dd>
                            <img src="__STATIC__/index/./img/cook4.jpg" alt="" class="goodsImg">
                            <div class="youhuiDiv">
                                <img src="__STATIC__/index/./img/new.png" alt="" class="youhuiImg">
                            </div>
                            <div class="numDiv">
                                <span>0</span>
                                <button class="reduceBtn">-</button>
                                <button class="addBtn">+</button>
                            </div>
                        </dd>
                        <dt>
                            <h4><a href="">有机尼奥长通粉</a></h4>
                            <p>
                                <button>有机尼奥</button>
                                <span class="likeP">250</span>g/份
                            </p>
                            <p class="money">￥<span class="money">13.00</span></p>
                        </dt>
                    </dl>
                </div>
            </div>
        </div>
        <!--右侧商品列表-->
        <div class="rightList">
            <div class="borderD">
                <img src="__STATIC__/index/./img/sanwenyu.jpg" alt="">
                <span>三文鱼</span>
            </div>
            <div class="borderD">
                <img src="__STATIC__/index/./img/xiariliangcai.jpg" alt="">
                <span>夏日凉菜</span>
            </div>
            <div class="borderD">
                <img src="__STATIC__/index/./img/sanwenyu.jpg" alt="">
                <span>三文鱼</span>
            </div>
            <div class="borderD">
                <img src="__STATIC__/index/./img/sanwenyu.jpg" alt="">
                <span>三文鱼</span>
            </div>
        </div>
    </div>
    <!--食物记事-->
    <div class="borderT food fc">
        <div class="logo fl">
            <img src="__STATIC__/index/./img/shiwujishi.jpg" alt="">
        </div>
        <div class="d1 fl">
            <img src="__STATIC__/index/./img/foodImg1.jpg" alt="">
            <h4><a href="">食物潮流</a></h4>
            <p>过去几年发生的多起食安危机、历史古都拒绝麦当劳进驻的抗议事件、3D打样餐点的出现，慢慢地在人们的心里发酵，新进而来的思潮在食物体系里掀起了一阵旋风。</p>
        </div>
        <div class="d2 fl">
            <img src="__STATIC__/index/./img/foodImg2.jpg" alt="">
            <h4><a href="">我们真的需要感谢这只小虫</a></h4>
            <p>没错，是蜜蜂。感谢它，不仅是因为它酿出的蜂蜜，也不仅因为它天生勤劳的品性，而是因为它无与伦比的重要性。是感恩，也是警醒，因为这只小虫深陷困境，而它们的困境也会成为人类的困境。</p>
        </div>
        <div class="d2 fr">
            <img src="__STATIC__/index/./img/foofImg3.jpg" alt="">
            <h4><a href="">我们为什么决定下架蓝鳍金枪鱼？</a></h4>
            <p>10月14日，一米市集上架蓝鳍金枪鱼；11月6日，用户建议一米市集下架蓝鳍金枪鱼；11月11日，一米市集下架蓝鳍金枪鱼。</p>
        </div>

    </div>
</div>
<!--底部-->
<?php echo widget('Widget/footer'); ?>
<!--回到顶部按钮-->
<div class="toTopBtn"></div>
<div class="customerBtn"></div>
</body>
</html>