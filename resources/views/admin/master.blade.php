<!doctype html>
<html lang="en">
    <head>
        @include('admin.partials.head')

        
        <style>
                .app-main{
                    display: unset;
                }
                </style>
    @if(app()->getLocale() == 'ar')
    <style>
        body{
            direction: rtl;
            text-align: right;
        }

        .closed-sidebar.fixed-sidebar .app-main__outer {
    padding-right: 80px;
    padding-left: 0px;

}
.fixed-sidebar .app-main .app-main__outer {
    z-index: 9;
    padding-right: 280px;
    padding-left: 0px;

}


.dropdown-menu.dropdown-menu-right {
    right: unset !important;
}

.closed-sidebar .app-sidebar .app-sidebar__inner ul li a {
    text-indent: 4rem !important;
    padding: 0;
}
.app-header .app-header__content .app-header-right {
    align-items: center;
    display: flex;
    margin-right: auto;
    margin-left :0;
}

.mr-2, .mx-2 {
    margin-left: 0.5rem !important;

}

.nav-item.nav-item-divider {
    margin: 0.5rem 0;
    height: 1px;
    overflow: hidden;
    background: #dee2e6;
}

.grid-menu [class*="col-"] {
    border-left: #dee2e6 solid 0;
    border-right: #dee2e6 solid 1;




}

.vertical-nav-menu i.metismenu-state-icon, .vertical-nav-menu i.metismenu-icon {
    text-align: center;
    width: 34px;
    height: 34px;
    line-height: 34px;
    position: absolute;
    left: 0px !important;
    right: 0px !important;
    top: 50%;
    margin-top: -17px;
    font-size: 1.5rem;
    opacity: .3;
    transition: color 300ms;

}

.vertical-nav-menu li a {
    display: block;
    line-height: 2.4rem;
    height: 2.4rem;
    padding: 0 45px 0 1.5rem;
    position: relative;
    border-radius: 0.25rem;
    color: #343a40;
    white-space: nowrap;
    transition: all .2s;
    margin: .1rem 0;
}

@media (min-width: 576px)
{
.grid-menu [class*="col-"]:nth-child(1n) {
    border-right-width: 1px;
    border-bottom: #dee2e6 solid 1px;
    border-top: #dee2e6 solid 1px;
}
}



@media (max-width: 991.98px)
{
.app-sidebar {
    flex: 0 0 181px!important;
    width: 280px !important;
    transform: translateX(280px);
    position: fixed;
}
.sidebar-mobile-open .app-sidebar .app-sidebar__inner ul li a {
    text-indent: initial;
    padding: 0 0 0 45px;
}


}

.header-btn-lg::before {
    position: absolute;
    right: -1px;
    top: 50%;
    background: #dee2e6;
    width: 1px;
    height: 30px;
    margin-top: -15px;
    content: '';
}


.header-btn-lg {
    padding: 0 1.5rem 0 0 !important;
    margin-right: 1.5rem;
    display: flex;
    align-items: center;
    position: relative;
}

.pr-0, .px-0 {
    padding-left: 0 !important;

}



.closed-sidebar.fixed-sidebar .app-main__outer {
    padding-right: 80px;
    padding-left: 0 !important;


    /* padding-left: 0px; */
}
.closed-sidebar.fixed-sidebar .app-main__outer {
    padding-right: 80px;
    padding-left: 0 !important;


}

.closed-sidebar .app-sidebar .app-sidebar__inner .app-sidebar__heading {
    text-indent: 999em;
}

@media (max-width: 991.98px)
{
.app-main .app-main__outer {
    padding-right: 0 !important;
    padding-left: 0 !important;
}
}



.app-page-title .page-title-icon {
    font-size: 2rem;
    display: flex;
    align-items: center;
    align-content: center;
    text-align: center;
    padding: 0.83333rem;
    margin: 0 0 0 30px;
    background: #fff;
    box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
    border-radius: 0.25rem;
    width: 60px;
    height: 60px;
}

.dropdown-menu .dropdown-header {
    text-transform: uppercase;
    font-size: 0.73333rem;
    color: #3f6ad8;
    font-weight: bold;
    text-align: right;
}

.mr-3, .mx-3 {
    margin-left: 1rem !important;
}


.nav-item.nav-item-header {
    text-align: initial;
    text-transform: uppercase;
    font-size: 0.73333rem;
    color: #6c757d;
    font-weight: bold;
    padding: 0.5rem 1rem;
}

.ml-auto, .mx-auto {
    margin-right: auto !important;
    margin-left:unset !important;
}
        </style>

<style>
        .goog-te-banner-frame,.custom-translate {
                display: none;
        }
        
        body {
                top: 0 !important;
            }
        .goog-tooltip {
            display: none !important;
        }
        .goog-tooltip:hover {
            display: none !important;
        }
        .goog-text-highlight {
            background-color: transparent !important;
            border: none !important; 
            box-shadow: none !important;
        }


        /* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 150ms infinite linear;
  -moz-animation: spinner 150ms infinite linear;
  -ms-animation: spinner 150ms infinite linear;
  -o-animation: spinner 150ms infinite linear;
  animation: spinner 150ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
        
        </style>
        
        @endif
    </head>
    <body id="body">
            {{-- <div id="loading" class="loading">Loading&#8230;</div> --}}

        <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
            @csrf
            <!--Header START-->
            @include('admin.partials.header')
            <!--Header END-->
            <!--THEME OPTIONS START-->
            {{-- {{> theme-options }} --}}
            <!--THEME OPTIONS END-->
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    @include('admin.partials.sidebar')
                </div>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        @yield('layout-title')   
                        <div class="app-inner-layout">
                            @yield('main')
                        </div>
                    </div>
                    <div class="app-wrapper-footer">
                        @include('admin.partials.footer')
                    </div>        
                </div>
            </div>
        </div>
        @include('admin.partials.scripts')
    </body>

    @if(app()->getLocale() == 'ar')

    <!-- <div class="custom-translate" st yle="display: none;" id="google_translate_element"></div> -->

<!-- 
<script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
<!-- ASYNCHRONOUS Google Translate --
<script type="text/javascript">


    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.FloatPosition.TOP_RIGHT,
            autoDisplay: false
        }, 'google_translate_element');
    }

    (function () {
        var googleTranslateScript = document.createElement('script');
        googleTranslateScript.type = 'text/javascript';
        googleTranslateScript.async = true;
        googleTranslateScript.src =
            '//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(
            googleTranslateScript );
           
    })();

    $("body").on('DOMSubtreeModified', "#selector", function() {
     });

    Cookies.set('googtrans', '/en/ar', { expires: 999});

 
</script>     -->

<script type="text/javascript">
    $("#loading").hide();
</script>
@endif


</html>
