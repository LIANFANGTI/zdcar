<!DOCTYPE html>
<!-- saved from url=(0024)http://repair5.66km.com/ -->
<?php 
	include("function.php");
	@session_start();
	if(!isset($_SESSION['username'])){
		//echo"session错误";
	echo"<script>window.location.href='login.php'</script> ";
			}
	else{
		$user=$_SESSION['username'];
		//echo"<script>alert('".$user."')<//script>";
	}
?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>自点科技-个人中心</title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8">
    <script type="text/javascript">
        if (window.top != window) { window.top.document.location.href = document.location.href;}
    </script>
    <link href="http://repair5.66km.com/assets/css/base?v=nIiWSI4W9_Q0sqQp2xqEywEXlZPJMIZLHN4kn5VTSq01" rel="stylesheet">

    <style type="text/css">
        .template
        {
            display: none !important;
        }
    </style>
</head>
<body style="zoom: 1;">
    <div class="layout-top">
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <ul class="nav-fixed" id="main-menu">
            <li class="nav-fixed-li e-pos-r">
                <a class="nav-fixed-a dropdown-toggle" href="http://repair5.66km.com/#" data-toggle="dropdown">
                    <span class="icons-12 icons-12-file white margin-r5"></span>开单1
                </a>
                <ul class="dropdown-menu secondMenu dropdown-nav-ul">

                    <li>

                        <ul class="sub-nav-list" style="position: static;">
                            <li class="sub-nav-li" data-permission-list="A01" data-permission-style="css" data-permission-css="hide">
                                <a href="bill.php" class="text">开单</a>
                            </li>

                            <li class="sub-nav-li" data-permission-list="A02" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Sale/BillHistory" class="text">单据管理</a>
                            </li>

                            <li class="sub-nav-li" data-permission-list="A03" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Sale/Return" class="text">销售退货开单</a>
                            </li>

                            <li class="sub-nav-li" data-permission-list="A04" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Sale/ReturnHistory" class="text">销售退货单管理</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-fixed-li e-pos-r">
                <a class="nav-fixed-a dropdown-toggle" href="http://repair5.66km.com/#" data-toggle="dropdown">
                    <span class="icons-12 icons-12-gift white margin-r5"></span>采购
                </a>
                <ul class="dropdown-menu secondMenu dropdown-nav-ul">
                    <li>
                        <ul class="sub-nav-list" style="position: static;">
                            <li class="sub-nav-li" data-permission-list="A05" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Purchase/PurchaseEdit" class="text">采购开单</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A06" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Purchase/Index" class="text">采购单管理</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A07" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Purchase/ReturnEdit" class="text">采购退货开单</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A08" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Purchase/ReturnIndex" class="text">采购退货单管理</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-fixed-li e-pos-r">
                <a class="nav-fixed-a dropdown-toggle" href="http://repair5.66km.com/#" data-toggle="dropdown">
                    <span class="icons-12 icons-12-mechanism white margin-r5"></span>仓库
                </a>
                <ul class="dropdown-menu secondMenu dropdown-nav-ul">
                    <li>

                        <ul class="sub-nav-list" style="position: static;">
                            <li class="sub-nav-li " data-permission-list="A09" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Goods/index" class="text">商品管理</a>
                            </li>
                             <li class="sub-nav-li" data-permission-list="A38" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Goods/Distribution" class="text">库存分布</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A10" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/StockTake/StockTakeEdit" class="text">盘点开单</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A11" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/StockTake/Index" class="text">盘点单管理</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A10" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Transfer/TransferEdit" class="text">转仓开单</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A11" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Transfer/Index" class="text">转仓单管理</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-fixed-li e-pos-r">
                <a class="nav-fixed-a dropdown-toggle" href="http://repair5.66km.com/#" data-toggle="dropdown">
                    <span class="icons-12 icons-12-people white margin-r5"></span>客户
                </a>
                <ul class="dropdown-menu secondMenu dropdown-nav-ul">

                    <li>

                        <ul class="sub-nav-list" style="position: static;">
                            <li class="sub-nav-li" data-permission-list="A12" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/CustomerCar/Customer" class="text">客户管理</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A13" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Card/PrePaidCard" class="text">客户办卡</a>
                            </li>
                            <!--
                            <li class="sub-nav-li" data-permission-list="" data-permission-style="css" data-permission-css="hide">
                                <a href="/Member/Member" class="text">客户退卡</a>
                            </li>
                            -->
                            <li class="sub-nav-li" data-permission-list="A15" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Card/Index" class="text">会员卡管理</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A16" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Package/PrePaid" class="text">套餐管理</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li class="nav-fixed-li e-pos-r">
                <a class="nav-fixed-a dropdown-toggle" href="http://repair5.66km.com/#" data-toggle="dropdown">
                    <span class="icons-12 icons-12-line white margin-r5"></span>应用
                </a>
                <ul class="dropdown-menu mGoodsSon secondMenu dropdown-nav-ul">
                    <li>
                        <ul class="sub-nav-list" style="position: static;">
                            
                            <li class="sub-nav-li" data-permission-list="A17" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Warning/CarWarning" class="text">客户提醒</a>
                            </li>

                            <li class="sub-nav-li" data-permission-list="A18" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Warning/Warning" class="text">库存预警</a>
                            </li>
                            
                            <li class="sub-nav-li" data-permission-list="A19" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Sale/BillShadowHistory" class="text">报销单</a>
                            </li>
                             <li class="sub-nav-li" data-permission-list="A41" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/BasicData/Fee" class="text">收支管理</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A42" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/BasicData/Tools" class="text">工具管理</a>
                            </li>
                             <li class="sub-nav-li" data-permission-list="A43" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Sale/VinInfo" class="text">VIN查询</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-fixed-li e-pos-r">
                <a class="nav-fixed-a dropdown-toggle" href="http://repair5.66km.com/#" data-toggle="dropdown">
                    <span class="icons-12 icons-12-line white margin-r5"></span>报表
                </a>
                <ul class="dropdown-menu mGoodsSon secondMenu dropdown-nav-ul">
                    <li>
                        <ul class="sub-nav-list" style="position: static;">
                            <li class="sub-nav-li" data-permission-list="A20" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/reports/GoodsSale" class="text">销售报表</a>
                            </li>

                            <li class="sub-nav-li" data-permission-list="A21" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/reports/GoodsPurchase" class="text">商品采购明细表</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A22" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/reports/SaleReceive" class="text">资金报表</a>
                            </li>


                            <li class="sub-nav-li" data-permission-list="A23" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/reports/SaleReport" class="text">销售单汇总表</a>
                            </li>

                            <li class="sub-nav-li" data-permission-list="A24" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/reports/CardPrePaidBuy" class="text">会员卡充值记录</a>
                            </li>

                            <li class="sub-nav-li" data-permission-list="A25" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/reports/CardPrePaidPay" class="text">会员卡消费记录</a>
                            </li>
                            <!--
                            <li class="sub-nav-li" data-permission-list="" data-permission-style="css" data-permission-css="hide">
                                <a href="/reports/StoredCheckoutDetail" class="text">会员卡退卡记录</a>
                            </li>
-->
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-fixed-li e-pos-r">
                <a class="nav-fixed-a dropdown-toggle" href="http://repair5.66km.com/#" data-toggle="dropdown">
                    <span class="icons-12 icons-12-line white margin-r5"></span>统计
                </a>
                <ul class="dropdown-menu mGoodsSon secondMenu dropdown-nav-ul">
                    <li>
                        <ul class="sub-nav-list" style="position: static;">
                            <li class="sub-nav-li">
                                <a href="http://repair5.66km.com/Statistics/SummaryChart" class="text">营业额统计</a>
                            </li>

                            <li class="sub-nav-li">
                                <a href="http://repair5.66km.com/Statistics/Income" class="text">收入统计</a>
                            </li>
                            <li class="sub-nav-li">
                                <a href="http://repair5.66km.com/Statistics/Card" class="text">会员卡统计</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-fixed-li e-pos-r">
                <a class="nav-fixed-a dropdown-toggle" href="http://repair5.66km.com/#" data-toggle="dropdown">
                    <span class="icons-12 icons-12-mechanism white margin-r5"></span>资料
                </a>
                <ul class="dropdown-menu secondMenu dropdown-nav-ul">
                    <li>

                        <ul class="sub-nav-list" style="position: static;">
                            <li class="sub-nav-li" data-permission-list="A27" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/BasicData/Item" class="text">项目管理</a>
                            </li>

                            <li class="sub-nav-li" data-permission-list="A28" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Supplier/Index" class="text">供应商管理</a>
                            </li>

                            <li class="sub-nav-li" data-permission-list="A29" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Import/" class="text">资料导入</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>


            <li class="nav-fixed-li e-pos-r">
                <a class="nav-fixed-a dropdown-toggle" href="http://repair5.66km.com/#" data-toggle="dropdown">
                    <span class="icons-12 icons-12-gear white margin-r5"></span>设置
                </a>
                <ul class="dropdown-menu mGoodsSon secondMenu dropdown-nav-ul">
                    <li>

                        <ul class="sub-nav-list" style="position: static;">

                            <li class="sub-nav-li" data-permission-list="A30" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/user/Account" class="text">账号管理</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A32" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/user/user" class="text">员工管理</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A33" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/Shop/ShopInfo" class="text">门店信息</a>
                            </li>

                            <li class="sub-nav-li" data-permission-list="A34" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/BasicData/CustomerTag" class="text">客户类型管理</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A35" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/BasicData/BizTag" class="text">业务类型管理</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="A36" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/BasicData/PayMethod" class="text">结算方式管理</a>
                            </li>

                            <li class="sub-nav-li" data-permission-list="A37" data-permission-style="css" data-permission-css="hide">
                                <a href="http://repair5.66km.com/BasicData/Storage" class="text">仓库管理</a>
                            </li>
                            <!--
    <li class="sub-nav-li" data-permission-list="" data-permission-style="css" data-permission-css="hide">
        <a href="/Staff/BusinessSet" class="text">打印设置</a>
    </li>

    <li class="sub-nav-li" data-permission-list="" data-permission-style="css" data-permission-css="hide">
        <a href="/Staff/BusinessSet" class="text">业务设置</a>
    </li>

                            <li class="sub-nav-li" data-permission-list="" data-permission-style="css" data-permission-css="hide">
                                <a href="/Staff/BusinessSet" class="text">系统日志</a>
                            </li>
                                        -->
                        </ul>
                    </li>
                </ul>
            </li>


            <li class="nav-fixed-li e-pos-r">
                <a class="nav-fixed-a dropdown-toggle" href="http://repair5.66km.com/#" data-toggle="dropdown">
                    <span class="icons-12 icons-12-gear white margin-r5"></span>帮助
                </a>
                <ul class="dropdown-menu mGoodsSon secondMenu dropdown-nav-ul">
                    <li>

                        <ul class="sub-nav-list" style="position: static;">

                            <li class="sub-nav-li" data-permission-list="" data-permission-style="css">
                                <a href="http://repair5.66km.com/Home/Ask" class="text">常见问题</a>
                            </li>
                            <li class="sub-nav-li" data-permission-list="" data-permission-style="css">
                                <a href="http://repair5.66km.com/Home/Version" class="text">版本信息</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="nav-toolbar">
            <div class="nav-search-bar">
                <span class="icons-22">&nbsp;</span>
                <input type="text" name="" id="" value="">
            </div>
            <div class="uesr-bar">
                <span class="uesr-img hide"></span>
                <a class="username dropdown-toggle template" data-toggle="dropdown" href="http://repair5.66km.com/#">
                    <h1 id="contactname">{$username}</h1>
                    <h2>({$shopname})</h2>
                </a><a class="username dropdown-toggle" data-toggle="dropdown" href="http://repair5.66km.com/#">
                    <h1 id="contactname">练慌鸡</h1>
                    <h2>(重创空间)</h2>
                </a>
                <div class="dropdown-menu">
                    <ul class="dropdown-nav-ul e-clborder-t">
                        
                      
                        <li class="dropdown-nav-li">
                            <a href="logout.php" data-action="logout">退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mail-bar fl-r">
                <a class="" href="http://repair5.66km.com/#" title="是否锁定">
                    
                    <span class="num">已锁定</span>
                </a>
            </div>
            
        </div>
    </div>
    <div class="layout-content">
        <div class="guidepost">
            <div class="guidepost-pa" style="display: none;">
                <a class="btn edis-ib" id="guid_pre" href="javascript:void(0);"><span class="icons-12 icons-12-left gray"></span></a>
            </div>
            <div class="guidepost-con">
                <ul id="main-tab-nav" class="nav nav-tabs edis-ib">
                    
                    <li class="guidepost-item active">
                        <a data-toggle="tab" href="http://repair5.66km.com/#tab-0">首页</a>
                    </li>
                    <li class="guidepost-item hide">
                        <a data-toggle="tab" class="edis-ib" href="http://repair5.66km.com/#tab3"><span class="icons-12 icons-12-trash gray">&nbsp;</span></a>
                    </li>
                </ul>
            </div>
            <div class="guidepost-pa" style="display: none;">
                <a class="btn edis-ib" id="guid_after" href="http://repair5.66km.com/#"><span class="icons-12 icons-12-right gray"></span></a>
            </div>
        </div>

        <div class="e-main e-auto padding-0 tab-content" style="font-size: 0px; display: block; height: 959px;" id="content-frame">
            <iframe id="tab-0" class="tab-pane active" src="desktop.php" style="width: 100%; height: 100%; border: none;">
            </iframe>
        </div>
        
    </div>
    
    
    <script src="base"></script>

    <script type="text/javascript" src="GetPermissions"></script>
    <script type="text/javascript">
        function OpenModel(OpenUrl, width, height) {
            if (window.showModalDialog === undefined) {
                window.showModalDialog = window.open;
            }
            window.showModalDialog(OpenUrl + "&date=" + Math.random(), window, "dialogWidth=" + width + "px;dialogHeight=" + height + "px;");
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.tabFrame.init('#main-menu');
        });
    </script>
    <div id="common-dialog" class="e-auto" style="display: none;">
        <div class="" id="common-dialog-txt" style="padding: 5px;">你确认删除吗？</div>
    </div>
    <script type="text/javascript">
        $('.nav-fixed-li .dropdown-toggle,.nav-fixed-li .dropdown-menu').hover(function () {
            $(this).parent('.nav-fixed-li').addClass("open")
        }, function () {
            $(this).parent('.nav-fixed-li').removeClass("open")
        });
    </script>
    <script type="text/javascript">
        //页面右上角用户姓名、店铺、连锁等
        $(function () {
            $.postJson("/Account/GetLoginInfo", {})
                .done(function (result) {
                    if (result.code === 0) {
                        var renderFn = function (temp, data) {
                            for (var k in data) {
                                temp = temp.replace(new RegExp("\\{\\$" + k + "\\}", "ig"), data[k]);
                            }
                            return temp;
                        };
                        {
                            var templateObj = $(".uesr-bar > .username.template");
                            var templateObj_clone = templateObj.clone();
                            templateObj_clone.removeClass("template");
                            var templateHtml = $("<div>").append(templateObj_clone).html();
                            var html = renderFn(templateHtml, result.data);
                            templateObj.after(html);
                        }
                        //{
                        //    if (result.data.shops.length <= 1) {
                        //        $(".uesr-bar .dropdown-nav-ul [data-action=\"changeshop\"]").closest("li").addClass("template");
                        //    }
                        //}
                        //{
                        //    var context = $("#change_shop_dialog");
                        //    var templateObj = $(".template", context);
                        //    var templateObj_clone = templateObj.clone();
                        //    templateObj_clone.removeClass("template");
                        //    var templateHtml = $("<div>").append(templateObj_clone).html();
                        //    var html = "";
                        //    for (var i = 0, j = result.data.shops.length; i < j; i++) {
                        //        html += renderFn(templateHtml, result.data.shops[i]);
                        //    }
                        //    templateObj.after(html);
                        //}
                    } else { messageManager.alert(result.msg); }
                });

            {
                var context = $(".uesr-bar .dropdown-nav-ul");
                context.on("click", "[data-action]", function (e) {
                    e.preventDefault();
                    var $this = $(this);
                    var action = $this.attr("data-action");
                    switch (action) {
                        //case "changeshop":
                        //    var $dialog = $this.data("dialog");
                        //    if (!$dialog) {
                        //        $dialog = messageManager.create(false, { width: 320 });
                        //        var c = $("#change_shop_dialog").html();
                        //        $dialog.custom("切换门店", c, [{
                        //            text: "确定", click: function (closeFn) {
                        //                var $shop = $(".e-box-content [data-shop].active", this);
                        //                if (!$shop.length) { messageManager.alert("您没有选择门店！"); }
                        //                else {
                        //                    var shopId = $shop.attr("data-shop");
                        //                    $.postJson("/Account/ChangeShop", { shopId: shopId })
                        //                        .done(function (result) {
                        //                            if (result.code === 0) { location.reload(); }
                        //                            else { messageManager.alert(result.msg); }
                        //                        });
                        //                    closeFn();
                        //                }
                        //                return true;
                        //            }
                        //        }, { text: "关闭" }]);
                        //        $this.data("dislog", $dialog);
                        //        $dialog.get().on("click", ".e-box-content [data-shop]", function (e) {
                        //            e.preventDefault();
                        //            $(this).addClass("active").siblings().removeClass("active");
                        //        });
                        //    }
                        //    $dialog.show();
                        //    break;
                        case "logout":
                            messageManager.confirm("确定退出本系统？", function (closeFn) {
                                closeFn();
                                location.href = "logout.php";
                            });
                            break;
                    }
                });
            }
        });
    </script>
    <script type="text/javascript">
        $(function () {
            window.object = {};
            _.extend(object, Backbone.Events);
            var frame_box = $("#content-frame");
            var frame_parent = frame_box.parent();
            frame_box.hide();
            var h = frame_parent.height();
            frame_box.height(h - 39);
            frame_box.show();

            $('#AInventoryCheck').on('click', function () {
                $.postJson("/Inventory/GetLockAccount")
                    .done(function (result) {
                        debugger;
                        if (result.State) {
                            $.tabFrame.openTab('新增盘点单', "/Inventory/AddCheckHistory?purchaseId=''");

                        }
                        else {
                            messageManager.alert("请先锁定账套");
                            $.tabFrame.openTab('盘点单历史', '/inventory/InventoryCheckHistory');
                        }
                    });
            })
        });
    </script>


</body></html>