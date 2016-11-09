<div class="transparent-container">

    {{--注册导航栏--}}
    <div class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-inverse open-hover" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex2-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand" style="font-family: 'Open Sans'; font-style: italic;">
                        RiskManage
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex2-collapse">

                    {{--<form class="navbar-form navbar-left" role="search">--}}
                    {{--<div class="form-group">--}}
                    {{--<input type="text" class="form-control" placeholder="搜索">--}}
                    {{--</div>--}}
                    {{--</form>--}}

                    {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<li><a href="#">关于我们</a></li>--}}
                    {{--</ul>--}}

                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>


    @for($i = 0; $i < 5; $i++)
        <br>
    @endfor

</div>

</div>
