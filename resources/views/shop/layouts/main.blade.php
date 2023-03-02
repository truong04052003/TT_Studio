<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thanh Trường Studio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('shop/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/styles/responsive.css') }}">
    <style>
        .col-md-12 {
    margin: -23px 53px 0px -24px;
}
        .owl-carousel {
            display: none;
            width: 100%;
            -webkit-tap-highlight-color: transparent;
            position: relative;
            z-index: 1
        }

        .owl-carousel .owl-stage {
            position: relative;
            -ms-touch-action: pan-Y;
            touch-action: manipulation;
            -moz-backface-visibility: hidden
        }

        .owl-carousel .owl-stage:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0
        }

        .owl-carousel .owl-stage-outer {
            position: relative;
            overflow: hidden;
            -webkit-transform: translate3d(0, 0, 0)
        }

        .owl-carousel .owl-wrapper,
        .owl-carousel .owl-item {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0)
        }

        .owl-carousel .owl-item {
            position: relative;
            min-height: 1px;
            float: left;
            -webkit-backface-visibility: hidden;
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none
        }

        .owl-carousel .owl-item img {
            display: block;
            width: 100%
        }

        .owl-carousel .owl-nav.disabled,
        .owl-carousel .owl-dots.disabled {
            display: none
        }

        .owl-carousel .owl-nav .owl-prev,
        .owl-carousel .owl-nav .owl-next,
        .owl-carousel .owl-dot {
            cursor: pointer;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel .owl-nav button.owl-next,
        .owl-carousel button.owl-dot {
            background: none;
            color: inherit;
            border: none;
            padding: 0 !important;
            font: inherit
        }

        .owl-carousel.owl-loaded {
            display: block
        }

        .owl-carousel.owl-loading {
            opacity: 0;
            display: block
        }

        .owl-carousel.owl-hidden {
            opacity: 0
        }

        .owl-carousel.owl-refresh .owl-item {
            visibility: hidden
        }

        .owl-carousel.owl-drag .owl-item {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .owl-carousel.owl-grab {
            cursor: move;
            cursor: grab
        }

        .owl-carousel.owl-rtl {
            direction: rtl
        }

        .owl-carousel.owl-rtl .owl-item {
            float: right
        }

        .no-js .owl-carousel {
            display: block
        }

        .owl-carousel .animated {
            animation-duration: 1000ms;
            animation-fill-mode: both
        }

        .owl-carousel .owl-animated-in {
            z-index: 0
        }

        .owl-carousel .owl-animated-out {
            z-index: 1
        }

        .owl-carousel .fadeOut {
            animation-name: fadeOut
        }

        @keyframes fadeOut {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        .owl-height {
            transition: height 500ms ease-in-out
        }

        .owl-carousel .owl-item .owl-lazy {
            opacity: 0;
            transition: opacity 400ms ease
        }

        .owl-carousel .owl-item .owl-lazy[src^=""],
        .owl-carousel .owl-item .owl-lazy:not([src]) {
            max-height: 0
        }

        .owl-carousel .owl-item img.owl-lazy {
            transform-style: preserve-3d
        }

        .owl-carousel .owl-video-wrapper {
            position: relative;
            height: 100%;
            background: #000
        }

        .owl-carousel .owl-video-play-icon {
            position: absolute;
            height: 80px;
            width: 80px;
            left: 50%;
            top: 50%;
            margin-left: -40px;
            margin-top: -40px;
            background: url("../../lib/owlCarousel/assets/owl.video.play.png") no-repeat;
            cursor: pointer;
            z-index: 1;
            -webkit-backface-visibility: hidden;
            transition: transform 100ms ease
        }

        .owl-carousel .owl-video-play-icon:hover {
            -ms-transform: scale(1.3, 1.3);
            transform: scale(1.3, 1.3)
        }

        .owl-carousel .owl-video-playing .owl-video-tn,
        .owl-carousel .owl-video-playing .owl-video-play-icon {
            display: none
        }

        .owl-carousel .owl-video-tn {
            opacity: 0;
            height: 100%;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
            transition: opacity 400ms ease
        }

        .owl-carousel .owl-video-frame {
            position: relative;
            z-index: 1;
            height: 100%;
            width: 100%
        }

        .owl-theme .owl-nav {
            margin-top: 10px;
            text-align: center;
            -webkit-tap-highlight-color: transparent
        }

        .owl-theme .owl-nav [class*='owl-'] {
            color: #fff;
            font-size: 14px;
            margin: 5px;
            padding: 4px 7px;
            background: #d6d6d6;
            display: inline-block;
            cursor: pointer;
            border-radius: 3px
        }

        .owl-theme .owl-nav [class*='owl-']:hover {
            background: #869791;
            color: #fff;
            text-decoration: none
        }

        .owl-theme .owl-nav .disabled {
            opacity: .5;
            cursor: default
        }

        .owl-theme .owl-nav.disabled+.owl-dots {
            margin-bottom: 10px;
            background: #fff
        }

        .owl-theme .owl-dots {
            text-align: center;
            -webkit-tap-highlight-color: transparent
        }

        .owl-theme .owl-dots .owl-dot {
            display: inline-block;
            zoom: 1;
            *display: inline
        }

        .owl-theme .owl-dots .owl-dot span {
            width: 10px;
            height: 10px;
            margin: 5px 7px;
            background: #d6d6d6;
            display: block;
            -webkit-backface-visibility: visible;
            transition: opacity 200ms ease;
            border-radius: 30px
        }

        .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background: #869791
        }

        .owl-theme .owl-nav {
            margin-top: 10px;
            text-align: center;
            -webkit-tap-highlight-color: transparent
        }

        .owl-theme .owl-nav [class*='owl-'] {
            color: #fff;
            font-size: 14px;
            margin: 5px;
            padding: 4px 7px;
            background: #d6d6d6;
            display: inline-block;
            cursor: pointer;
            border-radius: 3px
        }

        .owl-theme .owl-nav [class*='owl-']:hover {
            background: #869791;
            color: #fff;
            text-decoration: none
        }

        .owl-theme .owl-nav .disabled {
            opacity: .5;
            cursor: default
        }

        .owl-theme .owl-nav.disabled+.owl-dots {
            margin-top: 10px
        }

        .owl-theme .owl-dots {
            text-align: center;
            -webkit-tap-highlight-color: transparent
        }

        .owl-theme .owl-dots .owl-dot {
            display: inline-block;
            zoom: 1;
            *display: inline
        }

        .owl-theme .owl-dots .owl-dot span {
            width: 10px;
            height: 10px;
            margin: 5px 7px;
            background: #d6d6d6;
            display: block;
            -webkit-backface-visibility: visible;
            transition: opacity 200ms ease;
            border-radius: 30px
        }

        .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background: #869791
        }

        .owl-customDots.owl-theme .owl-nav.disabled+.owl-dots {
            position: absolute;
            bottom: 3px;
            left: 0;
            right: 0
        }

        .owl-customDots.owl-theme .owl-dots .owl-dot span {
            height: 2px;
            border-radius: 0;
            opacity: .5;
            background: #fff;
            margin: 0 2px
        }

        .owl-customDots.owl-theme .owl-dots .owl-dot.active span,
        .owl-customDots.owl-theme .owl-dots .owl-dot:hover span {
            opacity: 1
        }

        #colorbox,
        #cboxOverlay,
        #cboxWrapper {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 99999;
            overflow: hidden;
            -webkit-transform: translate3d(0, 0, 0)
        }

        #cboxWrapper {
            max-width: none
        }

        #cboxOverlay {
            position: fixed;
            width: 100%;
            height: 100%
        }

        #cboxMiddleLeft,
        #cboxBottomLeft {
            clear: left
        }

        #cboxContent {
            position: relative
        }

        #cboxLoadedContent {
            overflow: auto;
            -webkit-overflow-scrolling: touch
        }

        #cboxTitle {
            margin: 0
        }

        #cboxLoadingOverlay,
        #cboxLoadingGraphic {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        #cboxPrevious,
        #cboxNext,
        #cboxClose,
        #cboxSlideshow {
            cursor: pointer
        }

        .cboxPhoto {
            float: left;
            margin: auto;
            border: 0;
            display: block;
            max-width: none;
            -ms-interpolation-mode: bicubic
        }

        .cboxIframe {
            width: 100%;
            height: 100%;
            display: block;
            border: 0;
            padding: 0;
            margin: 0
        }

        #colorbox,
        #cboxContent,
        #cboxLoadedContent {
            box-sizing: content-box;
            -moz-box-sizing: content-box;
            -webkit-box-sizing: content-box
        }

        #cboxOverlay {
            background: #000;
            opacity: .9;
            filter: alpha(opacity=90)
        }

        #colorbox {
            outline: 0
        }

        #cboxContent {
            overflow: visible;
            background: #fff
        }

        .cboxIframe {
            background: #fff
        }

        #cboxError {
            padding: 50px;
            border: 1px solid #ccc
        }

        #cboxLoadedContent {
            background: #fff
        }

        #cboxLoadingGraphic {
            background: url(../images/colorbox/loading.gif) no-repeat center center
        }

        #cboxLoadingOverlay {
            background: #fff
        }

        #cboxTitle {
            position: absolute;
            top: -22px;
            left: 0;
            color: #000
        }

        #cboxCurrent {
            position: absolute;
            top: -22px;
            right: 205px;
            text-indent: -9999px
        }

        #cboxPrevious,
        #cboxNext,
        #cboxSlideshow,
        #cboxClose {
            border: 0;
            padding: 0;
            margin: 0;
            overflow: visible;
            text-indent: -9999px;
            width: 20px;
            height: 20px;
            position: absolute;
            top: -20px;
            background: url(../images/colorbox/controls.png) no-repeat 0 0
        }

        #cboxPrevious:active,
        #cboxNext:active,
        #cboxSlideshow:active,
        #cboxClose:active {
            outline: 0
        }

        #cboxPrevious {
            background-position: 0 0;
            right: 44px
        }

        #cboxPrevious:hover {
            background-position: 0 -25px
        }

        #cboxNext {
            background-position: -25px 0;
            right: 22px
        }

        #cboxNext:hover {
            background-position: -25px -25px
        }

        #cboxClose {
            background-position: -50px 0;
            right: 0
        }

        #cboxClose:hover {
            background-position: -50px -25px
        }

        .cboxSlideshow_on #cboxPrevious,
        .cboxSlideshow_off #cboxPrevious {
            right: 66px
        }

        .cboxSlideshow_on #cboxSlideshow {
            background-position: -75px -25px;
            right: 44px
        }

        .cboxSlideshow_on #cboxSlideshow:hover {
            background-position: -100px -25px
        }

        .cboxSlideshow_off #cboxSlideshow {
            background-position: -100px 0;
            right: 44px
        }

        .cboxSlideshow_off #cboxSlideshow:hover {
            background-position: -75px -25px
        }

        .cls {
            position: absolute;
            right: 10px;
            top: 11px;
            width: 20px;
            height: 20px;
            cursor: pointer;
            z-index: 999
        }

        .cls:before {
            content: "×";
            font-size: 32px;
            color: #fff;
            line-height: 20px;
            text-align: center;
            width: 100%;
            height: 100%;
            font-family: Tahoma;
            display: block
        }

        #popupbox {
            width: 800px;
            position: relative;
            background-color: #fff
        }

        #popupbox * {
            box-sizing: inherit
        }

        #popupbox>b {
            text-align: center;
            font-size: 20px;
            padding: 15px 0 12px 0;
            display: block;
            background-color: #333;
            margin-bottom: 15px;
            color: #fff
        }

        #popupbox>label {
            padding: 15px 0;
            display: block;
            text-align: center
        }

        #popupbox.login {
            width: 500px
        }

        #popupbox.login>div {
            padding: 0 15px;
            text-align: center
        }

        #popupbox.login>div>* {
            display: block
        }

        #popupbox.login>div>span {
            margin-bottom: 10px;
            line-height: 1.4
        }

        #popupbox.login>div>button {
            display: inline-block;
            vertical-align: top
        }

        #popupbox.verify {
            width: 500px;
            text-align: center
        }

        #popupbox.verify>p {
            padding: 0 10px;
            text-align: center;
            line-height: 1.4
        }

        #popupbox.verify>div.info {
            padding: 10px 15px;
            background-color: #f1f1f1;
            text-align: center;
            margin: 10px 0
        }

        #popupbox.verify>div.info>* {
            display: inline-block;
            vertical-align: middle
        }

        #popupbox.verify>div.info>img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 7px
        }

        #popupbox.verify>div.info>span {
            text-align: left;
            line-height: 1.4
        }

        #popupbox.verify>form {
            padding: 0 10px;
            text-align: center
        }

        #popupbox.verify>form>* {
            display: block
        }

        #popupbox.verify>form>b {
            text-align: center;
            font-weight: normal;
            font-size: 16px
        }

        #popupbox.verify>form>input {
            height: 30px;
            line-height: 30px;
            border: 1px solid #ccc;
            width: 68%;
            padding: 0 2%;
            border-radius: 4px;
            margin: 5px auto
        }

        #popupbox.verify>form>button {
            display: inline-block
        }

        #popupbox.verify>form>a {
            padding-top: 10px;
            color: #0521ff
        }

        #popupbox.verify>form>p {
            padding: 0 10px;
            line-height: 1.5
        }

        #popupbox.user-list>form {
            text-align: center
        }

        #popupbox.user-list>form>* {
            display: inline-block;
            vertical-align: middle
        }

        #popupbox.user-list>form>span {
            text-align: right;
            width: 180px
        }

        #popupbox.user-list>form>span>b {
            display: block;
            font-size: 16px
        }

        #popupbox.user-list>form>div>* {
            display: inline-block;
            vertical-align: middle
        }

        #popupbox.user-list>form>div.ul-key {
            margin: 0 10px;
            position: relative
        }

        #popupbox.user-list>form>div.ul-key>input {
            width: 200px;
            height: 30px;
            line-height: 30px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 0 30px 0 10px;
            display: block
        }

        #popupbox.user-list>form>div.ul-key>button {
            position: absolute;
            width: 16px;
            height: 16px;
            background: transparent url(/ContentMwg/images/campaigns/icon/btn-search.png) no-repeat center top;
            right: 9px;
            top: 8px;
            border: none;
            cursor: pointer
        }

        #popupbox.user-list>div {
            padding: 0 10px;
            position: relative;
            max-height: 295px;
            overflow: hidden;
            margin: 15px 0;
            overflow-y: auto
        }

        #popupbox.user-list>div>table {
            width: 100%
        }

        #popupbox.user-list>div>table th {
            padding: 7px 10px;
            background-color: #f1f1f1;
            font-size: 13px;
            text-align: left
        }

        #popupbox.user-list>div>table th.tc {
            text-align: center
        }

        #popupbox.user-list>div>table td {
            padding: 10px;
            border-bottom: 1px solid #ccc
        }

        #popupbox.user-list>div>table td>a {
            color: #0091fb
        }

        #popupbox.user-list>div>table td>a>b {
            font-weight: normal
        }

        #popupbox.user-list>div>table td.check>b {
            color: #63bb02;
            background: transparent url(../images/general/iconcheckout@2x.png) no-repeat left center;
            background-size: 260px 50px;
            background-position: -165px -25px;
            display: inline-block;
            padding-left: 20px;
            height: 16px;
            line-height: 16px;
            font-weight: normal;
            font-size: 13px
        }

        #popupbox.user-list>div>table td.tc {
            text-align: center
        }

        #popupbox.user-list>a.showmore {
            width: 150px;
            display: block;
            margin: 0 auto 15px auto;
            background-color: #333;
            color: #fff;
            text-align: center;
            height: 30px;
            line-height: 32px;
            font-size: 13px
        }

        #popupbox.user-list>div>p {
            padding: 15px 0 35px 0;
            font-size: 17px;
            text-align: center
        }

        #popupbox.history {
            width: 500px
        }

        #popupbox.history .his-profile {
            margin: -5px 0 10px 0
        }

        #popupbox.history .his-profile>* {
            display: inline-block;
            vertical-align: middle
        }

        #popupbox.history .his-profile>img {
            width: 50px;
            height: 50px;
            border: 1px solid #ccc;
            margin-right: 5px;
            border-radius: 50%
        }

        #popupbox.history .his-profile>span>* {
            display: block
        }

        #popupbox.history .his-profile>span>a {
            color: #09f;
            font-size: 16px
        }

        #popupbox.history .his-profile>span>a>i {
            font-size: 13px;
            font-style: normal
        }

        #popupbox.history .his-profile>span>span {
            padding-top: 3px
        }

        #popupbox .content {
            position: relative;
            overflow: hidden;
            padding: 5px 15px;
            max-height: 350px
        }

        #popupbox .content.scrollbar {
            overflow-y: auto
        }

        #popupbox .content>* {
            font-size: 15px;
            line-height: 1.5 !important;
            margin-bottom: 10px
        }

        #popupbox .content a {
            color: #09f
        }

        .scroll {
            overflow: hidden;
            overflow-y: scroll !important;
            -webkit-overflow-scrolling: touch;
            -ms-scroll-chaining: chained
        }

        @media screen and (max-width:640px) {
            #popupbox {
                width: 460px !important
            }

            #popupbox.user-list>form>* {
                display: block;
                margin-bottom: 5px
            }

            #popupbox.user-list>form>span {
                text-align: center;
                width: auto
            }

            #popupbox.user-list>form>span>b {
                display: inline-block;
                margin-right: 5px
            }

            #popupbox.user-list>form>div.ul-key {
                width: 262px;
                margin: 0 auto 5px auto
            }

            #popupbox.user-list>form>div.ul-key>input {
                width: 220px
            }

            #popupbox.user-list>div>table th:first-child,
            #popupbox.user-list>div>table td:first-child {
                text-align: left
            }

            #popupbox.user-list>div>table th:last-child {
                width: 110px
            }

            #popupbox.user-list>div {
                padding: 0 5px
            }
        }

        @media screen and (max-width:480px) {
            #popupbox>b {
                font-size: 16px;
                font-weight: normal
            }
        }

        @media screen and (max-width:414px) {
            #popupbox {
                width: 394px !important
            }
        }

        @media screen and (max-width:384px) {
            #popupbox {
                width: 364px !important
            }
        }

        @media screen and (max-width:375px) {
            #popupbox {
                width: 355px !important
            }
        }

        @media screen and (max-width:360px) {
            #popupbox {
                width: 340px !important
            }
        }

        @media screen and (max-width:320px) {
            #popupbox {
                width: 300px !important
            }
        }

        * {
            box-sizing: border-box
        }

        body.not-found {
            background-color: #fff
        }

        .owl-carousel.listproduct .item {
            width: auto
        }

        .owl-carousel.listproduct .item:first-child {
            border: none
        }

        .owl-carousel.listproduct .owl-wrapper {
            display: flex !important
        }

        .owl-carousel.listproduct .owl-item {
            display: flex
        }

        .owl-carousel.listproduct .item {
            width: 100%
        }

        .owl-carousel.listproduct .owl-item:first-child {
            border-left: 1px solid #f1f1f1
        }

        .owl-carousel.listproduct .owl-item {
            border-bottom: 1px solid #f1f1f1;
            border-top: 1px solid #f1f1f1;
            border-right: 1px solid #f1f1f1
        }

        .owl-carousel .owl-buttons div {
            background: rgba(255, 255, 255, .9) !important;
            height: 60px;
            width: 30px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2
        }

        .owl-carousel .owl-buttons div::before {
            border-top: 3px solid #666;
            border-right: 3px solid #666;
            content: '';
            height: 22px;
            position: absolute;
            top: 18px;
            width: 22px
        }

        .owl-carousel .owl-prev {
            box-shadow: 6px 0 4px rgba(0, 0, 0, .05), 4px 0 4px rgba(0, 0, 0, .09);
            border-radius: 0 4px 4px 0;
            left: 0
        }

        .owl-carousel .owl-next {
            box-shadow: -6px 0 4px rgba(0, 0, 0, .05), -4px 0 4px rgba(0, 0, 0, .09);
            border-radius: 4px 0 0 4px;
            right: 0
        }

        .owl-carousel .owl-prev::before {
            left: 10px;
            transform: rotate(-135deg)
        }

        .owl-carousel .owl-next::before {
            transform: rotate(45deg);
            right: 8px
        }

        * {
            margin: 0;
            padding: 0
        }

        img {
            border: 0
        }

        a {
            text-decoration: none;
            transition: .2s;
            color: #288ad6
        }

        ul,
        ol {
            list-style: none
        }

        .clr {
            clear: both
        }

        .clearfix {
            display: block
        }

        .clearfix:after {
            content: "";
            display: block;
            clear: both
        }

        body,
        input,
        button,
        option,
        textarea,
        label,
        select,
        legend,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a {
            font: 14px/18px Arial, Helvetica, sans-serif;
            color: #333;
            outline: none
        }

        body {
            min-width: 1024px
        }

        p {
            -webkit-margin-before: 0;
            -webkit-margin-after: 0;
            -webkit-margin-start: 0;
            -webkit-margin-end: 0;
            text-rendering: geometricPrecision
        }

        input[type=text],
        input[type=tel],
        textarea {
            -webkit-appearance: none
        }

        [class^="iconfeed-"],
        [class*="iconfeed-"] {
            background-image: url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/icon_global.png);
            background-repeat: no-repeat;
            display: inline-block;
            width: 75px;
            height: 108px;
            vertical-align: middle;
            background-size: 100px 145px
        }

        .iconfeed-dmx {
            background-position: -2px -57px;
            width: 53px;
            height: 53px
        }

        .iconfeed-tgdd {
            background-position: 0 -2px;
            width: 53px;
            height: 53px
        }

        .iconfeed-radio {
            background-position: -57px -32px;
            width: 19px;
            height: 19px
        }

        .iconfeed-radio.active {
            background-position: -57px -57px;
            width: 19px;
            height: 19px
        }

        [class^="iconratingnew-"],
        [class*="iconratingnew-"] {
            background-image: url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/icon-comment.png?v=1);
            background-repeat: no-repeat;
            display: inline-block;
            height: 30px;
            width: 30px;
            line-height: 30px;
            vertical-align: middle;
            background-size: 152px 58px
        }

        .iconratingnew-redstar {
            background-position: -72px 0;
            width: 20px;
            height: 19px
        }

        .iconratingnew-redstar--big {
            background-position: -124px -30px;
            width: 28px;
            height: 27px
        }

        .iconratingnew-circlestar {
            background-position: -100px 0;
            width: 16px;
            height: 16px
        }

        .iconratingnew-circlestar--big {
            background-position: -5px -32px;
            width: 18px;
            height: 18px
        }

        .iconratingnew-star--big {
            background-position: -125px -1px;
            width: 27px;
            height: 27px
        }

        .iconratingnew-star--big.active {
            background-position: -1px -1px;
            width: 27px;
            height: 27px
        }

        .iconratingnew-star--medium {
            background-position: -38px 0;
            width: 23px;
            height: 23px
        }

        .iconratingnew-star--medium.active {
            background-position: -38px -27px;
            width: 23px;
            height: 23px
        }

        .iconratingnew-star--small {
            background-position: -72px -32px;
            width: 16px;
            height: 16px
        }

        .iconratingnew-star--small.active {
            background-position: -93px -32px;
            width: 16px;
            height: 16px
        }

        [class^="iconlogo-"],
        [class*="iconlogo-"] {
            background-repeat: no-repeat;
            display: inline-block;
            height: 24px;
            width: 80px;
            line-height: 30px;
            vertical-align: middle;
            background-size: 250px 200px
        }

        [class^="iconlogo-"].visible,
        [class*="iconlogo-"].visible {
            background-image: url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/DMX/Global/Desktop/Logo-webmoi.png?v=4)
        }

        .iconlogo-fashion {
            background-position: -85px -29px
        }

        .iconlogo-ji {
            background-position: -170px -58px
        }

        .iconlogo-bachhoaxanh {
            background-position: -170px 0
        }

        .iconlogo-cycle {
            background-position: -85px -58px
        }

        .iconlogo-thegioididong {
            background-position: 0 0
        }

        .iconlogo-dienmayxanh {
            background-position: -85px 0
        }

        .iconlogo-kids {
            background-position: -85px -120px
        }

        .iconlogo-topzone {
            background-position: 0 -58px
        }

        .iconlogo-sport {
            background-position: 0 -29px
        }

        .iconlogo-tantam {
            background-position: -170px -90px
        }

        .iconlogo-ankhang {
            background-position: -85px -90px
        }

        .iconlogo-4kfarm {
            background-position: 0 -90px
        }

        .iconlogo-vieclam {
            background-position: 0 -120px
        }

        section {
            width: 100%;
            max-width: 1200px;
            margin: auto
        }

        #gb-top-page {
            bottom: 15px;
            position: fixed;
            right: 15px;
            display: none;
            background: rgba(0, 0, 0, .6);
            color: #fff;
            font-size: 18px;
            -ms-border-radius: 50%;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            line-height: 29px;
            text-align: center;
            cursor: pointer;
            z-index: 99
        }

        .over-flow {
            overflow: hidden !important
        }

        .relative {
            position: relative !important
        }

        .hide {
            display: none !important
        }

        .disabled {
            pointer-events: none !important
        }

        .preloader.preall {
            position: fixed
        }

        #dldingtext {
            background: rgba(0, 0, 0, .9);
            border-radius: 5px 5px 0 0;
            bottom: 0;
            color: #fff;
            display: none;
            padding: 10px 15px;
            position: fixed;
            right: 0;
            z-index: 99999
        }

        .locationbox__overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 12;
            background: rgba(0, 0, 0, .75);
            display: none;
            margin: auto
        }

        .locationbox {
            background: #fff;
            position: fixed;
            z-index: 13;
            max-width: 476px;
            align-items: center;
            margin: auto;
            display: none;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
            left: 0;
            right: 0;
            border-radius: 8px
        }

        .locationbox__item {
            display: inline-block;
            color: #fff;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            width: calc(100% - 45px)
        }

        .locationbox__item span {
            text-transform: capitalize
        }

        .locationbox__item.locationbox__item--right {
            width: 100%;
            border-bottom: 1px solid #e0e0e0;
            padding: 17px 10px;
            position: relative;
            text-align: center;
            color: #333
        }

        .locationbox__item.locationbox__item--right p {
            text-align: center;
            font-weight: bold
        }

        .locationbox__item.locationbox__item--right>a:not(.cls-location) {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            color: #333;
            cursor: pointer;
            line-height: 21px;
            padding: 7px;
            text-align: right;
            width: 67px
        }

        .locationbox__item.locationbox__item--right>a:not(.cls-location):before,
        .locationbox__item.locationbox__item--right>a:not(.cls-location):after {
            background-color: #333;
            content: '';
            left: 13px;
            height: 14px;
            position: absolute;
            top: 10px;
            width: 1px
        }

        .locationbox__item.locationbox__item--right>a:not(.cls-location):before {
            transform: rotate(45deg)
        }

        .locationbox__item.locationbox__item--right>a:not(.cls-location):after {
            transform: rotate(-45deg)
        }

        .locationbox__popup.new-popup {
            position: relative;
            top: 0;
            width: 100%
        }

        .locationbox__popup .locationbox__popup--cnt {
            position: relative;
            overflow: visible;
            background-color: #fff;
            padding: 15px 45px;
            line-height: 25px;
            border-radius: 4px
        }

        .locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion {
            padding: 10px 5px;
            max-width: 330px;
            margin: 0 auto;
            position: absolute;
            left: -150%;
            right: 0;
            top: -30px
        }

        .locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion:before,
        .locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion:after {
            content: '';
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 8px 9px 8px;
            position: absolute;
            top: -8px;
            border-color: transparent transparent #4a90e2 transparent;
            left: 46%
        }

        .locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion>div p {
            padding-left: 0
        }

        .locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion .btn-block {
            display: block;
            overflow: hidden;
            line-height: normal;
            margin: 6px auto 2px;
            text-align: center
        }

        .locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion .btn-block .btn-location {
            background: #f97e0f;
            border-radius: 4px;
            padding: 10px;
            color: #fff;
            display: inline-block;
            width: 112px;
            text-align: center
        }

        .locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion .btn-block .btn-location.gray {
            background: #999
        }

        .locationbox__popup .accept {
            position: relative;
            display: block;
            padding: 12px 0 7px;
            text-align: center
        }

        .locationbox__popup .accept .btnConfirm {
            display: inline-block;
            overflow: hidden;
            padding: 13px 10px;
            border-radius: 4px;
            font-size: 14px;
            width: 90%;
            line-height: normal;
            text-transform: uppercase;
            color: #fff;
            text-align: center;
            background: #fd6e1d;
            background: -webkit-gradient(linear, 0% 0, 0% 100%, from(#fd6e1d), to(#f59000));
            background: -webkit-linear-gradient(top, #f59000, #fd6e1d);
            background: -moz-linear-gradient(top, #f59000, #fd6e1d);
            background: -ms-linear-gradient(top, #f59000, #fd6e1d);
            background: -o-linear-gradient(top, #f59000, #fd6e1d)
        }

        .locationbox__popup .accept .btnConfirm.disabled {
            background: #ddd;
            color: #333
        }

        .locationbox__showfull {
            display: block;
            color: #000;
            padding-bottom: 10px
        }

        .locationbox__btnchangeLC {
            color: #4b90e0;
            margin: 5px 0;
            padding: 5px 0;
            display: block
        }

        #lc_detail-dis strong,
        #lc_detail-ward strong {
            text-transform: capitalize
        }

        .locationbox__popup_notify {
            top: -40px;
            z-index: 9;
            max-width: 500px;
            margin: auto;
            position: relative;
            display: none
        }

        .locationbox__popup_notify .locationbox__popup--cnt.locationbox__popup--suggestion {
            top: -1px;
            background-color: #f1f1f1;
            padding-right: 25px;
            padding-left: 10px;
            box-shadow: inset 0 0 1px #333
        }

        .locationbox__popup_notify .locationbox__popup--cnt.locationbox__popup--suggestion:before,
        .locationbox__popup_notify .locationbox__popup--cnt.locationbox__popup--suggestion:after {
            border-color: transparent transparent #f1f1f1 transparent !important
        }

        .locationbox__popup_notify .close-notify {
            position: absolute;
            right: 5px;
            top: 5px;
            width: 18px;
            height: 18px;
            cursor: pointer;
            z-index: 2;
            background: #666;
            border-radius: 50%;
            opacity: .7;
            line-height: 18px
        }

        .locationbox__popup_notify .close-notify:before {
            content: "×";
            font-size: 15px;
            color: #fff;
            text-align: center;
            width: 18px;
            display: block
        }

        .form-group h3 {
            color: #000;
            font-weight: 600;
            padding: 0 0 5px;
            font-size: 14px
        }

        .form-group .boxprov {
            display: block;
            width: 100%;
            margin-bottom: 10px
        }

        .form-group .boxprov>input {
            display: block;
            padding: 7px 0;
            border: 1px solid #d9d9d9;
            border-radius: 4px;
            text-indent: 10px;
            width: calc(100% - 2px);
            height: 45px
        }

        .form-group .boxprov__listTT {
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            display: block;
            position: relative;
            margin: 0;
            flex: 1
        }

        .form-group .boxprov__listTT span {
            color: #000;
            display: block;
            padding: 10px;
            cursor: pointer
        }

        .form-group .boxprov__listTT span:after {
            content: "";
            width: 0;
            right: 0;
            border-top: 6px solid #999;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            display: inline-block;
            vertical-align: middle;
            margin: 8px 5px 0 0;
            float: right
        }

        .form-group .boxprov__listTT span.disabled {
            pointer-events: none;
            color: #999
        }

        .form-group .boxprov__listTT>div {
            display: none;
            position: absolute;
            background: #fff;
            padding: 0 0 5px;
            left: 0;
            right: 0;
            top: 45px;
            border-radius: 4px;
            border: 1px solid #ccc;
            z-index: 9;
            margin: 0 -1px
        }

        .form-group .boxprov__listTT>div:before,
        .form-group .boxprov__listTT>div:after {
            content: '';
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 10px 8px;
            border-color: transparent transparent #6b6b6b transparent;
            position: absolute;
            top: -7px;
            left: 5vh
        }

        .form-group .boxprov__listTT>div:after {
            border-color: transparent transparent #fff transparent
        }

        .form-group .boxprov__listTT>div .scroll-box {
            overflow-x: hidden;
            max-height: 220px
        }

        .form-group .boxprov__listTT .province-box {
            position: absolute;
            background: #fff;
            padding: 0 0 5px;
            left: 0;
            right: 0;
            top: 45px;
            overflow-x: hidden;
            overflow-y: auto;
            max-height: 220px;
            border-radius: 4px;
            border: 1px solid #ccc;
            z-index: 9
        }

        .form-group .boxprov__listTT .boxprov__listTT--bordertop {
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background-color: #fff
        }

        .form-group .boxprov__listTT .scroll-box .search-container {
            position: sticky;
            top: 5px;
            left: 0;
            right: 0
        }

        .form-group .boxprov__listTT .scroll-box input {
            display: block;
            padding: 7px 20px;
            border: 1px solid #d9d9d9;
            border-radius: 3px;
            text-indent: 10px;
            width: calc(100% - 15px);
            margin: 0 10px
        }

        .form-group .boxprov__listTT .scroll-box .btn-search-location {
            top: 0
        }

        .form-group .boxprov__listTT .scroll-box>ul {
            column-count: 2;
            column-fill: balance;
            overflow: hidden;
            display: block;
            column-gap: 0
        }

        .form-group .boxprov__listTT .scroll-box>ul li {
            display: inline-block;
            width: 100%;
            flex: 1 0 50%
        }

        .form-group .boxprov__listTT .scroll-box>ul li a {
            text-overflow: ellipsis;
            padding: 10px 10px 0;
            font-size: 14px;
            color: #288ad6;
            overflow: hidden;
            line-height: normal;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2
        }

        .form-group .boxprov__listTT .scroll-box>ul li a.active {
            font-weight: bold
        }

        .boxprov__listTT--scroll .warning-text {
            display: none;
            padding: 10px;
            background: rgba(45, 156, 219, .1);
            border-radius: 4px;
            font-size: 10px;
            border-left: 2.35px solid #2d9cdb;
            margin: 10px;
            line-height: 15px
        }

        #search-result {
            position: absolute;
            top: 33px;
            z-index: 11;
            width: 400px;
            left: 0;
            display: none
        }

        #search-result .suggest_search {
            background: #fff;
            border: 1px solid #eee;
            top: -24px;
            z-index: 100000;
            left: 2px;
            right: 2px;
            border-radius: 6px;
            box-shadow: 0 1px 8px rgba(0, 0, 0, .3)
        }

        #search-result .suggest_search li {
            display: block;
            overflow: hidden;
            padding: 10px;
            border-bottom: 1px solid #eee
        }

        #search-result .suggest_search li.ttitle {
            position: relative
        }

        #search-result .suggest_search li.ttitle .btnClosePop {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 1px solid #c2c2c2;
            position: absolute;
            right: 5px;
            top: 0;
            bottom: 0;
            z-index: 10;
            color: #c2c2c2;
            line-height: 19px;
            text-align: center;
            font-size: 18px;
            margin: auto;
            float: unset;
            padding: unset
        }

        #search-result .suggest_search li a {
            color: #3b7adb;
            font-size: 12px;
            margin: 0 5px 0;
            display: block
        }

        #search-result .suggest_search li .viewed {
            background: #f5f5f5;
            font-size: 13px;
            color: #666;
            font-weight: 400;
            padding: 10px;
            margin: -15px -10px
        }

        #search-result .suggest_search li.product_suggest a .item-img {
            float: left;
            width: 60px;
            height: auto;
            margin: 0 6px 0 0
        }

        #search-result .suggest_search li.product_suggest a .item-img img {
            width: 100%
        }

        #search-result .suggest_search li.product_suggest a .item-info {
            float: left;
            width: calc(100% - 66px)
        }

        #search-result .suggest_search li.product_suggest a .item-info .item-txt-online {
            line-height: 25px
        }

        #search-result .suggest_search li.product_suggest a h3 {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            color: #333;
            font-size: 14px;
            overflow: hidden
        }

        #search-result .suggest_search li.product_suggest a .price {
            font-size: 14px;
            color: #222;
            float: none;
            font-weight: bold;
            display: inline-block;
            vertical-align: middle
        }

        #search-result .suggest_search li.product_suggest a .price.twoprice {
            display: block;
            font-weight: normal;
            font-size: 13px;
            padding-top: 3px
        }

        #search-result .suggest_search li.product_suggest a .box-p {
            display: inline-block;
            vertical-align: middle
        }

        #search-result .suggest_search li.product_suggest a .box-p .price-old {
            display: inline-block;
            text-decoration: line-through;
            color: #333
        }

        #search-result .suggest_search li.product_suggest a .box-p .percent {
            color: #333
        }

        #search-result .suggest_search li.product_suggest a .item-gift {
            color: #333
        }

        #search-result .suggest_search:before,
        #search-result .suggest_search:after {
            content: '';
            width: 0;
            height: 0;
            position: absolute;
            bottom: 100%;
            left: 30%;
            border-bottom: 10px solid #eee;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent
        }

        #search-result .suggest_search:after {
            border-width: 8px;
            border-bottom-color: #f5f5f5;
            margin-left: 2px
        }

        .title-layout {
            font-size: 18px;
            line-height: 16px;
            margin-bottom: 20px
        }

        .layout-col3 {
            display: flex;
            margin: 0 -5px
        }

        .layout-col3 li {
            padding: 0 5px;
            width: 33.333%
        }

        .layout-col3 li img {
            width: 100%;
            border-radius: 4px
        }

        .trademark,
        .product-news {
            margin: 40px 0 30px
        }

        .trademark-slider,
        .product-news-slider {
            margin: 0 -5px;
            width: calc(100% + 10px)
        }

        .trademark-slider a,
        .product-news-slider a {
            display: block
        }

        .trademark-slider a img,
        .product-news-slider a img {
            width: 100%;
            border-radius: 4px
        }

        .application {
            display: flex;
            margin-top: 40px
        }

        .application a {
            color: #333
        }

        .application img {
            border-radius: 4px;
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .application .col1 {
            padding-right: 15px;
            width: 67%
        }

        .application .col1__ct {
            display: flex
        }

        .application .col1-big {
            width: 61%
        }

        .application .col1-big-img {
            position: relative;
            height: 270px
        }

        .application .col1-simple {
            margin-left: 10px;
            width: calc(39% - 10px)
        }

        .application .col1-title {
            font-size: 18px;
            font-weight: bold;
            line-height: 27px;
            margin-top: 10px
        }

        .application .col1-hour {
            color: #999;
            line-height: 21px;
            margin-top: 5px
        }

        .application .spl-item {
            align-items: center;
            display: flex;
            margin-bottom: 10px
        }

        .application .spl-item__img {
            position: relative;
            width: 120px;
            height: 70px
        }

        .application .spl-item-title {
            font-size: 12px;
            line-height: 17px;
            overflow: hidden;
            -webkit-line-clamp: 3;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical
        }

        .application .spl-item-hour {
            color: #999;
            font-size: 10px;
            line-height: 15px
        }

        .application .spl-item__content {
            padding-left: 10px;
            width: calc(100% - 120px)
        }

        .application .ytbclick {
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .application .ttl-main {
            margin-bottom: 10px
        }

        .application .title-layout,
        .application .readmore-txt {
            display: inline-block;
            vertical-align: middle
        }

        .application .title-layout {
            font-weight: bold;
            margin-right: 20px;
            margin-bottom: 0
        }

        .application .col2 {
            width: 33%
        }

        .game__item img {
            width: 100%
        }

        .game-box-wrap {
            display: flex;
            margin-top: 10px
        }

        .game-box-main {
            padding-left: 10px;
            width: calc(100% - 60px)
        }

        .game-box-img {
            width: 60px
        }

        .game-title {
            font-weight: bold;
            line-height: 21px
        }

        .game-label span,
        .game-label p {
            display: inline-block;
            vertical-align: middle
        }

        .game-label span {
            background-color: #07a358;
            border-radius: 4px;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            line-height: 16px;
            padding: 0 4px
        }

        .game-label p {
            font-size: 13px;
            line-height: 16px
        }

        .game-box-list a {
            color: #2f80ed;
            display: block;
            font-size: 12px;
            line-height: 18px;
            margin-top: 10px;
            padding-left: 15px;
            position: relative
        }

        .game-box-list a::before {
            background-color: #2f80ed;
            border-radius: 50%;
            content: '';
            height: 5px;
            left: 0;
            position: absolute;
            top: 6px;
            width: 5px
        }

        .game-slider .owl-nav button {
            top: 32%
        }

        .col2__ct .cook-title {
            font-size: 14px;
            font-weight: 500;
            line-height: 20px;
            margin: 5px 0;
            overflow: hidden;
            -webkit-line-clamp: 3;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical
        }

        .col2__ct .cook-time {
            color: #666;
            font-size: 13px
        }

        .col2__ct a:first-child .cook-img {
            width: 294px;
            height: 260px
        }

        .col2__ct a:last-child .cook-img {
            width: 80px;
            height: 80px
        }

        .col2__ct a:last-child .cook-main {
            padding-left: 10px;
            width: calc(100% - 110px)
        }

        .item-txt-online {
            color: #333;
            font-size: 12px;
            line-height: 16px;
            margin-top: 5px
        }

        .zone-bhx {
            margin: auto;
            max-width: 1200px;
            position: relative;
            z-index: 1;
            left: 0;
            right: 0;
            top: 0;
            clear: both
        }

        .zone-bhx span.note {
            font-style: italic;
            font-size: 12px;
            color: #fff;
            display: inline-block;
            vertical-align: middle
        }

        .zone-new-bhx {
            margin: auto;
            max-width: 1200px;
            position: relative;
            z-index: 1;
            left: 0;
            right: 0;
            top: 0;
            clear: both
        }

        .zone-new-bhx span.note {
            font-style: italic;
            font-size: 12px;
            color: #fff;
            display: inline-block;
            vertical-align: middle
        }

        .productbox-bhx {
            background-color: #f1f1f1;
            border: 6px solid #008847;
            border-top: 0
        }

        .productbox-bhx div.title {
            display: block;
            color: #fff;
            position: relative;
            font-size: 16px;
            background: #008847;
            padding: 10px 0
        }

        .productbox-bhx div.title a {
            margin-left: 2px;
            padding-left: 30px
        }

        .productbox-bhx div.title img {
            display: inline-block;
            vertical-align: middle;
            width: auto
        }

        .productbox-bhx div.title span:first-child {
            color: #fff200
        }

        .productbox-bhx div.title span.close {
            position: absolute;
            margin: auto;
            right: 5px;
            cursor: pointer;
            top: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(0, -50%);
            font-size: 12px;
            color: #fff;
            font-weight: normal
        }

        .productbox-bhx div._product {
            display: flex
        }

        .productbox-bhx div._product .productbox-bhx-item {
            padding-bottom: 45px;
            position: relative;
            background-color: #fff;
            width: calc(100%/10);
            text-align: center
        }

        .productbox-bhx div._product .productbox-bhx-item a:first-child {
            padding: 5px;
            position: relative;
            display: block
        }

        .productbox-bhx div._product .productbox-bhx-item:not(:last-child) {
            border-right: 1px solid #eee
        }

        .productbox-bhx div>a>span {
            position: relative;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            height: 36px;
            margin: 0;
            width: 100%;
            font-size: 12px;
            text-overflow: ellipsis;
            overflow: hidden;
            color: #333;
            line-height: 18px
        }

        .productbox-bhx div>a .productbox-bhx-item-img {
            height: auto;
            width: 100px;
            margin: auto
        }

        .productbox-bhx div>a .productbox-bhx-item-img img {
            width: 100%;
            height: auto;
            margin: 10px auto
        }

        .productbox-bhx div>a .zone-price {
            font-size: 14px
        }

        .productbox-bhx div>a .zone-price .after-price {
            color: #d12c1f;
            display: block;
            font-size: 16px
        }

        .productbox-bhx div>a .zone-price .before-price {
            color: #666;
            display: inline-block;
            text-decoration: line-through;
            font-weight: normal
        }

        .productbox-bhx div>a .zone-price .percent-price {
            color: #dd1c1a;
            display: inline-block
        }

        .productbox-bhx div .zone-buy {
            position: absolute;
            color: #007e3c;
            padding: 4px 19px;
            border: 1px solid #008847;
            border-radius: 4px;
            margin: 5px;
            left: 0;
            right: 0;
            bottom: 5px;
            text-align: center
        }

        .owl-carousel .owl-item img.lbliconimg,
        .lbliconimg {
            width: auto !important;
            height: 40px;
            position: absolute;
            left: 0;
            bottom: 0
        }

        .owl-carousel .owl-item img.lbliconimg.lbliconimg_44,
        .lbliconimg.lbliconimg_44 {
            left: unset;
            bottom: unset;
            right: 0;
            top: 0
        }

        .owl-carousel .owl-item img.lbliconimg.tgdd,
        .lbliconimg.tgdd {
            height: 45px !important
        }

        .feedback_global>* {
            display: block;
            position: fixed;
            bottom: 50px;
            z-index: 2
        }

        .feedback_global #global_form {
            display: none;
            left: 0;
            right: 0;
            margin: auto;
            max-width: 465px;
            top: 50%;
            z-index: 13;
            padding: 20px 30px;
            background: #fff;
            border-radius: 8px;
            transform: translateY(-50%);
            bottom: initial
        }

        .feedback_global #global_form.form_success {
            max-width: 280px;
            padding: 75px 55px 45px
        }

        .feedback_global #global_form.form_success a {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            color: #333;
            cursor: pointer;
            float: right;
            line-height: 21px;
            padding: 7px;
            text-align: right;
            width: 67px
        }

        .feedback_global #global_form.form_success a:before,
        .feedback_global #global_form.form_success a:after {
            background-color: #333;
            content: '';
            left: 13px;
            height: 14px;
            position: absolute;
            top: 10px;
            width: 1px
        }

        .feedback_global #global_form.form_success a:before {
            transform: rotate(45deg)
        }

        .feedback_global #global_form.form_success a:after {
            transform: rotate(-45deg)
        }

        .feedback_global #global_form>* {
            display: block
        }

        .feedback_global #global_form h3 {
            font-size: 16px;
            line-height: 20px;
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px
        }

        .feedback_global #global_form>span {
            font-size: 14px;
            line-height: 1.4;
            text-align: center;
            display: block;
            color: #666
        }

        .feedback_global #global_form>span.form_more {
            color: #333;
            text-align: left;
            padding-bottom: 20px;
            cursor: pointer;
            position: relative;
            width: max-content;
            cursor: pointer
        }

        .feedback_global #global_form>span.form_more:after {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #333;
            content: '';
            position: absolute;
            top: 8px;
            right: -15px
        }

        .feedback_global #global_form textarea,
        .feedback_global #global_form input {
            resize: none;
            width: 410px;
            background: #fff;
            border: 1px solid #e0e0e0;
            box-sizing: border-box;
            border-radius: 4px;
            margin-bottom: 10px;
            padding: 15px 10px;
            line-height: 15px;
            height: 48px
        }

        .feedback_global #global_form #Description {
            margin-top: 20px;
            height: 74px;
            margin-bottom: 20px
        }

        .feedback_global #global_form .check-option {
            margin-bottom: 10px
        }

        .feedback_global #global_form .check-option>div {
            display: inline-block;
            margin-right: 20px
        }

        .feedback_global #global_form .check-option>div i {
            cursor: pointer
        }

        .feedback_global #global_form .zone-button {
            text-align: center
        }

        .feedback_global #global_form .zone-button .close-feed {
            padding: 12px 40px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 16px;
            line-height: 20px;
            color: #2f80ed;
            border: 0;
            margin-right: 2%;
            border: 1px solid #2f80ed
        }

        .feedback_global #global_form .zone-button>* {
            display: inline-block;
            max-width: 46%;
            width: 46%
        }

        .feedback_global #global_form button {
            padding: 13px 40px;
            background: #2f80ed;
            border-radius: 4px;
            font-weight: 600;
            font-size: 16px;
            line-height: 20px;
            color: #fff;
            border: 0;
            width: 100%;
            cursor: pointer
        }

        .feedback_global>div img {
            display: block;
            transform: scale(.5);
            cursor: pointer
        }

        #notifychatmsg .notifyChat2 {
            width: 93px !important;
            height: 37px !important
        }

        .banner-texttop._offtemp {
            background-color: #ffd103
        }

        .banner-texttop._offtemp ._left {
            width: 100%;
            text-align: center
        }

        .banner-texttop._offtemp ._right,
        .banner-texttop._offtemp ._left:after {
            display: none
        }

        .banner-texttop._offtemp:before,
        .banner-texttop._offtemp:after {
            background-color: #2d67c4
        }

        .banner-texttop {
            overflow-y: hidden;
            width: 1200px;
            max-height: 44px;
            margin: auto;
            background-color: #2d67c4
        }

        .banner-texttop * {
            box-sizing: border-box
        }

        .banner-texttop:before,
        .banner-texttop:after {
            content: '';
            position: absolute;
            width: 360px;
            height: 44px
        }

        .banner-texttop:before {
            left: calc((100% - 1200px)/2 - 359px);
            background-color: #2d67c4
        }

        .banner-texttop:after {
            right: 0;
            width: calc((100% - 1200px)/2 + 10px);
            background-color: #ffd103
        }

        .banner-texttop>div {
            display: inline-block;
            padding: 10px 0;
            position: relative
        }

        .banner-texttop ._left {
            width: 63%;
            text-align: right;
            background-color: #2d67c4;
            color: #fff
        }

        .banner-texttop ._left:after {
            content: '';
            position: absolute;
            top: -27px;
            right: -20px;
            border-top: 77px solid #2d67c4;
            border-right: 54px solid #ffd103;
            width: 9px
        }

        .banner-texttop ._left a {
            font-size: 20px;
            line-height: 24px;
            text-transform: uppercase;
            font-style: italic;
            font-weight: bold;
            color: #fff;
            z-index: 1;
            position: relative;
            padding-right: 90px
        }

        .banner-texttop ._left a:after {
            content: '';
            padding: 6px;
            box-shadow: 3px -3px 0 0 #fff inset;
            transform: rotate(225deg);
            right: 70px;
            display: inline-block;
            top: 2px;
            position: absolute
        }

        .banner-texttop ._left a:not(:first-child) {
            display: none
        }

        .banner-texttop ._left a span b {
            color: #ffd400;
            font-size: 26px;
            line-height: 20px
        }

        .banner-texttop ._right {
            width: calc(37% - 4px);
            text-align: left;
            background-color: #ffd103
        }

        .banner-texttop ._right span {
            font-size: 16px;
            line-height: 19px;
            color: #222
        }

        .banner-texttop ._right span a {
            color: #222
        }

        .banner-texttop ._right span a b {
            font-size: 20px;
            line-height: 24px
        }

        @media screen and (max-width:1300px) {
            .feedback_global>* {
                bottom: 110px;
                z-index: 10
            }
        }

        .sticky-sidebar a {
            position: fixed;
            top: 195px;
            width: 89px;
            z-index: 999
        }

        .sticky-sidebar a img {
            display: block;
            max-width: 100%;
            height: auto
        }

        .sticky-sidebar .banner-left {
            left: calc(((100vw - 1200px)/2) - 105px)
        }

        .sticky-sidebar .banner-right {
            right: calc(((100vw - 1200px)/2) - 105px)
        }

        @media screen and (max-width:1366px) {
            .sticky-sidebar a {
                width: 69px
            }

            .sticky-sidebar .banner-left {
                left: calc(((100vw - 1200px)/2) - 80px)
            }

            .sticky-sidebar .banner-right {
                right: calc(((100vw - 1200px)/2) - 80px)
            }
        }

        .banner-media img {
            display: block;
            margin: auto
        }

        .banner-media img.lazyload {
            height: 0
        }

        .banner-media .owl-carousel .owl-item .owl-lazy {
            opacity: 1
        }

        .media-slider {
            width: 1200px !important;
            margin: 0 auto
        }

        .media-slider .owl-nav button {
            height: 44px;
            background: none !important
        }

        .media-slider .owl-nav button span::before {
            top: 13px;
            height: 16px;
            width: 16px;
            border-top: 3px solid #fff;
            border-right: 3px solid #fff
        }

        .media-slider .owl-next,
        .media-slider .owl-prev {
            box-shadow: none
        }

        .media-slider {
            height: 44px;
            position: relative
        }

        .media-slider {
            display: block
        }

        .media-slider .item {
            position: absolute;
            top: 0;
            left: 0;
            display: none
        }

        .media-slider .item.visible {
            display: block
        }

        .media-slider .nav .prev,
        .media-slider .nav .next {
            position: absolute;
            z-index: 2;
            top: 0;
            width: 40px;
            height: 100%;
            cursor: pointer
        }

        .media-slider .nav .prev {
            left: 0
        }

        .media-slider .nav .next {
            right: 0
        }

        .media-slider .nav .prev .arrow-left,
        .media-slider .nav .next .arrow-right {
            height: 20px;
            width: 20px;
            border-top: 3px solid #666;
            border-right: 3px solid #666;
            position: absolute;
            top: 50%;
            left: 50%
        }

        .media-slider .nav .prev:hover .arrow-left,
        .media-slider .nav .next:hover .arrow-right {
            border-top: 3px solid #fff;
            border-right: 3px solid #fff
        }

        .media-slider .nav .prev .arrow-left,
        .media-slider .nav .next .arrow-right {
            height: 20px;
            width: 20px;
            border-top: 3px solid #666;
            border-right: 3px solid #666;
            position: absolute;
            top: 50%;
            left: 50%
        }

        .media-slider .nav .prev .arrow-left {
            -webkit-transform: translate(-20%, -50%) rotate(225deg);
            -ms-transform: translate(-20%, -50%) rotate(225deg);
            -o-transform: translate(-20%, -50%) rotate(225deg);
            transform: translate(-20%, -50%) rotate(225deg)
        }

        .media-slider .nav .next .arrow-right {
            -webkit-transform: translate(-70%, -50%) rotate(45deg);
            -ms-transform: translate(-70%, -50%) rotate(45deg);
            -o-transform: translate(-70%, -50%) rotate(45deg);
            transform: translate(-70%, -50%) rotate(45deg)
        }

        section.prmotebannerbhx {
            display: contents
        }

        .prmotebanner-bhx {
            max-width: 1200px;
            display: block;
            margin: 5px auto
        }

        .popup {
            display: none
        }

        .popup__background,
        .popup__container {
            position: fixed;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1000
        }

        .popup__background {
            background: rgba(0, 0, 0, .45)
        }

        .popup__container img {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            height: auto
        }

        .popup__close {
            border-radius: 50%;
            padding: .5em;
            border: 2px solid #fff;
            color: #fff;
            position: absolute;
            right: calc(50% - 242px);
            top: calc(50% - 214px);
            transform: translate(-50%, -50%);
            width: 28px;
            height: 28px;
            cursor: pointer
        }

        .popup__close::before {
            content: " ";
            position: absolute;
            display: block;
            background-color: #fff;
            width: 2px;
            left: 12px;
            top: 5px;
            bottom: 5px;
            transform: rotate(45deg)
        }

        .popup__close::after {
            content: " ";
            position: absolute;
            display: block;
            background-color: #fff;
            height: 2px;
            top: 12px;
            left: 5px;
            right: 5px;
            transform: rotate(45deg)
        }

        .fastdeli i.thunder-icon {
            width: 10px;
            height: auto
        }

        .fastdeli i.thunder-icon img {
            width: 10px;
            display: inline-block;
            height: auto;
            vertical-align: text-top
        }

        .locationbox-v2 {
            background: #fff;
            position: fixed;
            z-index: 13;
            max-width: 476px;
            max-height: 80vh;
            align-items: center;
            margin: auto;
            display: none;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
            left: 0;
            right: 0;
            border-radius: 8px;
            overflow: hidden
        }

        .locationbox-v2 p {
            font-weight: normal !important;
            max-width: 380px;
            color: #fff
        }

        .locationbox-v2 .locationbox__item {
            background: #2f80ed;
            white-space: normal;
            padding: 10px;
            box-sizing: border-box;
            border: 0
        }

        .locationbox-v2 .top-location p {
            font-size: 13px;
            text-align: left
        }

        .location-search {
            position: relative;
            margin-top: 10px
        }

        .location-search>i {
            position: absolute;
            left: 7px;
            top: 9px
        }

        .location-search input {
            width: 100%;
            padding: 8px 28px 8px 28px;
            border: 1px solid #fff;
            box-sizing: border-box;
            border-radius: 8px
        }

        .clear-searchbox {
            right: 8px;
            top: 27%;
            background: #000;
            position: absolute;
            border-radius: 50%;
            background: #d9d9d9;
            padding: 8px;
            cursor: pointer;
            display: none
        }

        .clear-searchbox span.box-relative {
            position: relative
        }

        .clear-searchbox .close-symbol {
            top: -5px;
            left: 0
        }

        .listing-location {
            padding: 10px;
            max-height: 40vh;
            margin-bottom: 10px;
            overflow: hidden
        }

        .listing-locale ul {
            display: grid;
            grid-auto-rows: minmax(min-content, max-content);
            grid-template-columns: repeat(2, minmax(0, 1fr));
            max-height: 39vh;
            overflow: auto
        }

        .listing-locale ul li a {
            padding: 10px;
            display: block;
            color: #333;
            width: 80%;
            border-bottom: 1px solid #f1f1f1
        }

        .listing-locale ul li a.active,
        .listing-locale ul li a:hover {
            background: #e9f4fb;
            border-bottom: 1px solid #e9f4fb
        }

        .locationbox-v2 .locationbox__item.locationbox__item--right a.cls-location {
            background-color: #2f80ed;
            border: 1px solid #e9f4fb;
            color: #fff;
            position: relative;
            top: 0;
            left: 0
        }

        .locationbox-v2 .locationbox__item span {
            text-transform: none
        }

        .top-location {
            background: #2f80ed;
            padding: 0 0 10px;
            display: flex;
            overflow: hidden;
            align-items: center;
            justify-content: space-between
        }

        .locationbox-v2 a.cls-location {
            color: #fff;
            padding: 7px 10px 7px 20px;
            border: 1px solid #fff;
            border-radius: 4px;
            position: relative;
            line-height: 1.3
        }

        .close-symbol {
            background-color: #fff;
            left: 10px;
            height: 10px;
            position: absolute;
            top: 11px;
            width: 1px;
            transform: rotate(-45deg)
        }

        .close-symbol::before {
            content: "";
            background-color: #fff;
            left: 0;
            height: 10px;
            position: absolute;
            top: 0;
            width: 1px;
            transform: rotate(90deg)
        }

        .locationbox__item.locationbox__item--right p.default-title {
            max-width: 380px;
            text-align: left
        }

        .locationbox__item.locationbox__item--right p.location-title {
            text-align: center;
            max-width: 65%;
            margin: 6px auto 15px;
            line-height: 1.5
        }

        a.back-ic {
            cursor: pointer;
            height: 10px;
            width: 10px;
            border-top: 2px solid #fff;
            border-right: 2px solid #fff;
            position: relative;
            top: 6px;
            left: 6px;
            -webkit-transform: translate(-20%, -50%) rotate(225deg);
            -ms-transform: translate(-20%, -50%) rotate(225deg);
            -o-transform: translate(-20%, -50%) rotate(225deg);
            transform: translate(-20%, -50%) rotate(225deg)
        }

        div#suggest-location {
            height: 39vh;
            overflow: hidden;
            display: none
        }

        ul.suggest-location {
            display: flex;
            flex-flow: column;
            overflow: hidden;
            overflow-y: auto;
            max-height: 100%
        }

        ul.suggest-location li {
            position: relative;
            padding-right: 30px
        }

        ul.suggest-location li::before {
            border-top: 1px solid #000;
            border-right: 1px solid #000;
            content: '';
            height: 6px;
            position: absolute;
            top: calc(50% - 3px);
            transform: rotate(45deg);
            right: 15px;
            width: 6px
        }

        ul.suggest-location li a {
            display: block;
            padding: 15px 0;
            overflow: hidden;
            color: #000
        }

        ul.suggest-location li a::after {
            content: "";
            border-bottom: 1px solid #e0e0e0;
            position: absolute;
            bottom: 0;
            width: calc(100% + 20px);
            left: -10px
        }

        ul.suggest-location li a span {
            margin-right: 10px
        }

        strong.choose-province {
            display: block;
            margin: 5px auto;
            color: #000;
            text-align: center;
            font-size: 14px
        }

        .location-title {
            color: #fff;
            padding: 0 0 10px;
            margin: 0 auto;
            line-height: 1.5;
            display: flex;
            overflow: hidden;
            align-items: center;
            justify-content: space-between
        }

        .location-title-text {
            max-width: 50%;
            margin: 0 auto;
            text-align: center
        }

        .footer__logo {
            background-color: #fff
        }

        .footer__logo-hd {
            color: #222;
            font-size: 14px;
            line-height: 21px
        }

        .footer__logo-list {
            font-size: 0;
            margin-top: 15px
        }

        .footer__logo-list li {
            float: left;
            width: 80px;
            margin: 0 8px 8px 0
        }

        .footer__logo-list li:nth-child(4n+4) {
            margin-right: 0
        }

        .footer__logo-list li a {
            display: block
        }

        .imgzalo img {
            max-width: 18px;
            margin-top: -5px;
            vertical-align: middle
        }

        * {
            margin: 0;
            padding: 0
        }

        img {
            border: 0
        }

        img.lazyload-after {
            opacity: 0
        }

        a {
            text-decoration: none;
            transition: .2s;
            color: #288ad6
        }

        ul,
        ol {
            list-style: none
        }

        .clr {
            clear: both
        }

        .clearfix {
            display: block
        }

        .clearfix:after {
            content: "";
            display: block;
            clear: both
        }

        body,
        input,
        button,
        option,
        textarea,
        label,
        select,
        legend,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a {
            font: 14px/18px Arial, Helvetica, sans-serif;
            color: #333;
            outline: none
        }

        body {
            min-width: 1024px
        }

        p {
            -webkit-margin-before: 0;
            -webkit-margin-after: 0;
            -webkit-margin-start: 0;
            -webkit-margin-end: 0;
            text-rendering: geometricPrecision
        }

        input[type=text],
        input[type=tel],
        textarea {
            -webkit-appearance: none
        }

        .main-menu .navmwg {
            display: none;
            position: absolute;
            background: #fff;
            top: 43px;
            width: 770px;
            border-radius: 4px;
            padding: 10px;
            z-index: 10;
            border: 1px solid #eee;
            left: 0;
            grid-auto-rows: minmax(min-content, max-content);
            grid-template-columns: repeat(4, auto)
        }

        .main-menu .navmwg .item-child:first-child {
            grid-row: 1/4
        }

        .main-menu li.has-list:hover .navmwg {
            display: grid
        }

        .main-menu .navmwg.limit-width {
            width: 160px
        }

        .main-menu .has-list.show-left .navmwg:not(.limit-width) {
            left: unset;
            right: 0
        }

        .main-menu li.has-list:hover .navmwg.limit-width {
            display: block
        }

        .main-menu .navmwg::before,
        .navmwg::after {
            content: '';
            width: 0;
            height: 0;
            position: absolute;
            bottom: 100%;
            left: 40px;
            border-bottom: 10px solid #d9d9d9;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom-color: #fff
        }

        .main-menu .has-list.show-left .navmwg:not(.limit-width)::before,
        .main-menu .has-list.show-left .navmwg:not(.limit-width)::after {
            left: unset;
            right: 40px
        }

        .main-menu a span.has-child:after {
            content: '';
            width: 0;
            height: 0;
            border-top: 6px solid #333;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            display: inline-block;
            vertical-align: middle;
            margin-left: 5px
        }

        .main-menu .navmwg div {
            width: 100%;
            margin-bottom: 10px
        }

        .main-menu .navmwg .no-child-final {
            margin: 0;
            width: auto;
            float: none
        }

        .main-menu .navmwg .no-child-final a {
            display: block
        }

        .main-menu .navmwg strong {
            text-transform: uppercase;
            border-bottom: 1px solid #eee;
            font-size: 13px;
            padding-bottom: 5px;
            color: #333
        }

        .main-menu .navmwg div a:hover h3 {
            font-weight: bold
        }

        .main-menu .navmwg a {
            display: block;
            padding: 10px 5px 0 0;
            color: #000;
            font-size: 11px;
            position: relative
        }

        .main-menu .navmwg div a {
            display: block;
            padding: 10px 5px 0 0;
            color: #000;
            font-size: 11px;
            position: relative
        }

        .main-menu .navmwg strong a {
            display: initial;
            text-transform: initial;
            color: #4a90e2
        }

        .main-menu .navmwg strong a::after {
            content: '';
            width: 0;
            height: 0;
            border-left: 5px solid #4a90e2;
            border-top: 4px solid transparent;
            border-bottom: 4px solid transparent;
            display: inline-block;
            margin-left: 5px
        }

        .hc-samsungsis img {
            width: 100%;
            height: auto
        }

        .sticky-sidebar {
            display: none
        }

        .sticky-sidebar.active {
            display: block
        }

        .livestream-header-container {
            background-color: #ffebaf;
            height: 44px
        }

        .livestream-header {
            width: 100%;
            height: 100%;
            max-width: 1200px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .livestream-header .status {
            background-color: #ef233c;
            border-radius: 40px;
            padding: 1px 8px;
            font-weight: bold;
            font-size: 14px;
            line-height: 21px;
            color: #f4f4f5
        }

        .livestream-header .status::after {
            display: inline-block;
            content: "";
            width: 8px;
            height: 8px;
            margin: 0 0 1px 4px;
            background-color: #fff;
            border-radius: 50%
        }

        .livestream-header .title {
            color: #ef233c;
            font-weight: bold;
            font-size: 14px;
            line-height: 17px;
            margin-left: 15px
        }

        .livestream-header .see-now {
            color: #2f80ed;
            font-size: 14px;
            line-height: 17px;
            margin-left: 15px;
            position: relative;
            padding-right: 10px
        }

        .livestream-header .see-now::after {
            content: "";
            width: 0;
            height: 0;
            border-bottom: 5px solid transparent;
            border-left: 5px solid #2f80ed;
            border-top: 5px solid transparent;
            position: absolute;
            top: 4px;
            right: 0
        }

        .imgzalo img {
            max-width: 18px;
            margin-top: -5px;
            vertical-align: middle
        }

        [class^="icon-"],
        [class*="icon-"] {
            background-image: url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/homev2/desk/icon_common@2x.png);
            background-repeat: no-repeat;
            display: inline-block;
            height: 30px;
            width: 30px;
            line-height: 30px;
            vertical-align: middle;
            background-size: 300px 200px
        }

        .icon-logo {
            background-position: 0 0;
            height: 24px;
            width: 141px
        }

        .icon-search {
            background-position: -150px 0;
            height: 17px;
            width: 17px
        }

        .icon-cart {
            background-position: -175px 0;
            height: 18px;
            width: 20px
        }

        .icon-facebook {
            background-position: -225px 0;
            height: 18px;
            width: 18px
        }

        .icon-youtube {
            background-position: -200px 0;
            height: 18px;
            width: 18px
        }

        .icon-dmx {
            background-position: 0 -30px;
            height: 18px;
            width: 103px
        }

        .icon-bhx {
            background-position: -110px -30px;
            height: 18px;
            width: 81px
        }

        .icon-maiam {
            background-position: 0 -60px;
            height: 18px;
            width: 71px
        }

        .icon-congthuong {
            background-position: -200px -30px;
            height: 24px;
            width: 79px
        }

        .icon-khieunai {
            background-position: -250px 0;
            height: 25px;
            width: 25px
        }

        .icon-protected {
            background-position: -80px -60px;
            height: 24px;
            width: 122px
        }

        .icon-star {
            background-position: -205px -60px;
            height: 12px;
            width: 13px
        }

        .icon-star-dark {
            background-position: -225px -60px;
            height: 12px;
            width: 13px
        }

        .icon-star-half {
            background-position: -215px -130px;
            height: 13px;
            width: 14px
        }

        .icon-ytb-big {
            background-position: 0 -90px;
            height: 31px;
            width: 43px
        }

        .icon-ytb-simple {
            background-position: -45px -90px;
            height: 22px;
            width: 30px
        }

        .icon-dienthoai {
            background-position: -85px -90px;
            height: 20px;
            width: 13px
        }

        .icon-laptop {
            background-position: -105px -90px;
            height: 20px;
            width: 25px
        }

        .icon-tablet {
            background-position: -140px -90px;
            height: 20px;
            width: 16px
        }

        .icon-phukien {
            background-position: -165px -90px;
            height: 18px;
            width: 22px
        }

        .icon-dhthongminh {
            background-position: -195px -90px;
            height: 22px;
            width: 17px
        }

        .icon-dhthoitrang {
            background-position: -220px -90px;
            height: 23px;
            width: 15px
        }

        .icon-pcmayin {
            background-position: -240px -90px;
            height: 16px;
            width: 23px
        }

        .icon-filter {
            background-position: -285px 0;
            height: 14px;
            width: 11px
        }

        .icon-check {
            background-position: -245px -60px;
            height: 7px;
            width: 10px
        }

        .icon-info {
            background-position: -265px -60px;
            height: 16px;
            width: 16px
        }

        .icon-sticky-search {
            background-position: 0 -125px;
            height: 15px;
            width: 15px
        }

        .icon-sticky-chat {
            background-position: -25px -125px;
            height: 20px;
            width: 24px
        }

        .icon-sticky-cart {
            background-position: -55px -125px;
            height: 21px;
            width: 23px
        }

        .icon-sticky-ss {
            background-position: -85px -125px;
            height: 20px;
            width: 22px
        }

        .icon-deletess {
            background-position: -165px -125px;
            height: 16px;
            width: 16px
        }

        .icon-tickbox {
            background-position: -115px -125px;
            height: 18px;
            width: 18px
        }

        .icon-findcp {
            background-position: -190px -125px;
            height: 19px;
            width: 19px
        }

        .icon-position {
            background-position: -275px -88px;
            width: 16px;
            height: 21px
        }

        [class^="iconnewglobal-"],
        [class*="iconnewglobal-"] {
            background-image: url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/homev2/desk/iconnew.png);
            background-repeat: no-repeat;
            display: inline-block;
            height: 30px;
            width: 30px;
            line-height: 30px;
            vertical-align: middle;
            background-size: 310px 257px
        }

        .iconnewglobal-logo {
            background-position: 0 -176px;
            width: 228px;
            height: 40px
        }

        .iconnewglobal-location {
            background-position: -35px 0;
            width: 8px;
            height: 10px
        }

        .iconnewglobal-cart {
            background-position: -48px 0;
            width: 25px;
            height: 24px
        }

        .iconnewglobal-menu {
            background-position: -77px 0;
            width: 26px;
            height: 26px
        }

        .iconnewglobal-search {
            background-position: -107px 0;
            width: 18px;
            height: 18px
        }

        .iconnewglobal-vote {
            background-position: -129px 0;
            width: 12px;
            height: 12px
        }

        .iconnewglobal-service {
            background-position: -273px -133px;
            width: 38px;
            height: 38px
        }

        .iconnewglobal-game {
            background-position: -272px -175px;
            width: 38px;
            height: 38px
        }

        .iconnewglobal-ticket {
            background-position: -273px -219px;
            width: 38px;
            height: 38px
        }

        .iconnewglobal-card {
            background-position: -273px -89px;
            width: 38px;
            height: 38px
        }

        .iconnewglobal-logodmx {
            background-position: 0 -35px;
            width: 74px;
            height: 22px
        }

        .iconnewglobal-logotopzone {
            background-position: -78px -35px;
            width: 74px;
            height: 22px
        }

        .iconnewglobal-logobhx {
            background-position: -158px -35px;
            width: 74px;
            height: 22px
        }

        .iconnewglobal-avakids {
            background-position: 0 -62px;
            width: 74px;
            height: 22px
        }

        .iconnewglobal-avasport {
            background-position: -78px -62px;
            width: 74px;
            height: 22px
        }

        .iconnewglobal-avafashion {
            background-position: -158px -62px;
            width: 74px;
            height: 22px
        }

        .iconnewglobal-avaji {
            background-position: -236px -62px;
            width: 74px;
            height: 22px
        }

        .iconnewglobal-boxarrow {
            background-position: -206px 0;
            width: 18px;
            height: 18px
        }

        .iconnewglobal-menusubdmx {
            background-position: -252px 0;
            width: 18px;
            height: 18px
        }

        .iconnewglobal-whitecart {
            background-position: -275px 0;
            width: 24px;
            height: 24px
        }

        .iconnewglobal-whitemenu {
            background-position: -236px -33px;
            width: 24px;
            height: 24px
        }

        .iconnewglobal-logodmx {
            background-position: -41px -89px;
            width: 91px;
            height: 30px
        }

        .taC {
            text-align: center
        }

        @-webkit-keyframes sonar {
            0% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            100% {
                -webkit-transform: scale(4);
                transform: scale(4);
                opacity: 0
            }
        }

        @keyframes sonar {
            0% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            100% {
                -webkit-transform: scale(4);
                transform: scale(4);
                opacity: 0
            }
        }

        .bordercol {
            background-color: #ffe56c;
            height: 32px;
            width: 1px
        }

        .btn-readmore {
            border: 1px solid #e0e0e0;
            background-color: #fff;
            border-radius: 4px;
            color: #333;
            display: block;
            font-size: 14px;
            line-height: 18px;
            max-width: 340px;
            margin: 0 auto;
            padding: 8px 5px;
            text-align: center;
            width: 100%
        }

        .btn-readmore.blue {
            border: 1px solid #288ad6;
            color: #288ad6
        }

        .btn-readmore span {
            position: relative;
            padding-right: 15px
        }

        .btn-readmore span::before {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #333;
            content: '';
            position: absolute;
            right: -3px;
            top: 5px
        }

        .btn-readmore.blue span::before {
            border-top: 5px solid #288ad6
        }

        .header__top>div,
        .header__main>div {
            width: 100%;
            max-width: 1220px;
            margin: auto;
            padding: 0 10px
        }

        .header__top {
            background-color: #ffd400;
            padding: 10px 0 0
        }

        .header__top>div {
            align-items: center;
            display: flex;
            justify-content: space-between
        }

        .header__main {
            background-color: #ffd400;
            padding: 0 0 10px
        }

        .header__logo {
            padding-right: 15px
        }

        .header__address {
            color: #333;
            font-size: 11px;
            line-height: 15px;
            margin-right: 21px;
            width: 15%;
            padding-left: 15px;
            background: rgba(255, 172, 10, .6);
            padding: 4px 6px 4px 10px;
            border-radius: 4px;
            position: relative
        }

        .header__address span {
            color: #333;
            font-weight: bold;
            width: max-content;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            overflow: hidden;
            max-width: 117px;
            text-transform: capitalize;
            padding-right: 15px
        }

        .header__address span::before {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #000;
            content: '';
            position: absolute;
            top: 43%;
            right: 7px
        }

        .header__search {
            position: relative;
            width: 34%;
            border-radius: 4px;
            background-color: #fff
        }

        .header__search input {
            background-color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 12px;
            line-height: 14px;
            height: 40px;
            padding: 8px 8px 8px 13px;
            width: calc(100% - 35px)
        }

        .header__search button {
            background-color: transparent;
            border: none;
            position: absolute;
            top: 10px;
            right: 10px
        }

        .header__search .dropdownsearch {
            float: left;
            overflow: hidden;
            width: 90px
        }

        .header__search .dropdownsearch a#type {
            display: block;
            overflow: hidden;
            padding: 6px 4px 6px 6px;
            box-sizing: border-box;
            background: #fed700;
            margin: 5px;
            border-radius: 4px;
            color: #333;
            font-size: 12px;
            line-height: 18px;
            text-align: center
        }

        .header__search .dropdownsearch a#type:after {
            content: "";
            border-top: 5px solid #333;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            display: inline-block;
            vertical-align: middle;
            margin: 0 0 0 3px
        }

        .header__search .dropdownsearch ul {
            display: none;
            background: #fff;
            overflow: hidden;
            position: absolute;
            left: 0;
            width: 90px;
            top: 36px;
            -webkit-box-shadow: 3px 6px 23px -6px rgba(0, 0, 0, .87);
            box-shadow: 3px 6px 23px -6px rgba(0, 0, 0, .87);
            z-index: 99999
        }

        .header__search .dropdownsearch ul li {
            display: block;
            overflow: hidden;
            padding: 5px 7px;
            font-size: 12px;
            cursor: pointer
        }

        .header__search .dropdownsearch ul li.active {
            font-weight: bold
        }

        header.header.manusearch .header__search input {
            width: calc(100% - 90px - 35px);
            padding: 8px 8px 8px 3px
        }

        .header__cart {
            border-radius: 4px;
            color: #333;
            font-size: 12px;
            line-height: 14px;
            padding: 8px 10px;
            width: 12%;
            background: rgba(255, 172, 10, .6)
        }

        .header__cart .box-cart {
            position: relative;
            display: inline-block;
            vertical-align: middle
        }

        .header__cart i,
        .header__cart span {
            display: inline-block;
            vertical-align: middle;
            font-weight: 700
        }

        .header__cart i {
            margin-right: 8px
        }

        .header__history {
            color: #333;
            font-size: 12px;
            line-height: 14px;
            margin: 0 12px 0 18px;
            text-align: center;
            width: 55px
        }

        .header__hot {
            color: #333;
            font-size: 12px;
            line-height: 14px;
            padding: 3px 4px 3px 30px;
            position: relative;
            width: 16%
        }

        .header__hot .dot {
            background-color: #ffe66b;
            border-radius: 100%;
            display: block;
            left: 10px;
            height: 8px;
            margin-top: -5px;
            position: absolute;
            top: 50%;
            width: 8px
        }

        .header__listtop {
            align-items: center;
            display: flex;
            width: 28%
        }

        .header__listtop .divitem {
            padding: 0 12px;
            text-align: center
        }

        .header__listtop .divitem:last-child {
            padding-right: 0
        }

        .header__listtop .divitem a {
            color: #333;
            font-size: 14px;
            line-height: 16px
        }

        .name-order {
            color: #333;
            font-size: 12px;
            line-height: 14px;
            padding: 6px 14px;
            width: 10%;
            border-radius: 4px;
            text-align: center;
            float: left;
            margin: 0 21px;
            background: rgba(255, 172, 10, .6)
        }

        .cart-number {
            border-radius: 50%;
            color: #fff;
            display: inline-block;
            font-size: 10px;
            line-height: 12px;
            left: 8px;
            height: 12px;
            position: absolute;
            text-align: center;
            top: 0;
            width: 12px
        }

        .cart-number.has-cart {
            background-color: #dd1c1a;
            line-height: inherit
        }

        .main-menu {
            display: flex;
            justify-content: space-between;
            margin: 0 -10px 0;
            padding-top: 10px
        }

        .main-menu a {
            color: #000;
            font-size: 0;
            line-height: 16px
        }

        .main-menu li {
            cursor: pointer;
            padding: 10px;
            position: relative
        }

        .main-menu li.current {
            background-color: #fff
        }

        .main-menu li:last-child {
            margin-right: 0
        }

        .main-menu li i,
        .main-menu li span {
            display: inline-block;
            font-size: 14px;
            vertical-align: middle
        }

        .main-menu li i {
            margin-right: 5px
        }

        .main-menu li i img {
            height: 20px;
            width: auto;
            object-fit: cover;
            vertical-align: middle
        }

        #search-result .suggest_search .hc-samsungsis {
            padding: 5px
        }

        .hc-samsungsis a img {
            display: block;
            width: 275px;
            height: 30px
        }

        .footer {
            clear: both;
            border-top: 1px solid #e2e2e2;
            margin-top: 35px;
            background: #fff
        }

        .footer__top {
            padding: 15px 0 5px
        }

        .footer__col {
            float: left;
            width: 24%
        }

        .footer__col:nth-child(3) {
            width: 23%
        }

        .footer__col:nth-child(4) {
            width: 29%
        }

        .f-listmenu li {
            margin-bottom: 10px
        }

        .f-listmenu li.hidden {
            display: none
        }

        .f-listmenu li a {
            color: #333;
            line-height: 21px
        }

        .f-listmenu li a:hover {
            color: #2f80ed
        }

        .f-listmenu .arrow {
            position: relative
        }

        .f-listmenu .arrow::before {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #333;
            content: '';
            position: absolute;
            top: 7px;
            right: -15px
        }

        .f-listtel__content {
            line-height: 21px;
            margin-top: 10px
        }

        .f-listtel__content a {
            color: #2f80ed;
            font-weight: bold
        }

        .f-listtel__content>span {
            width: 65px;
            display: inline-block
        }

        .f-social {
            margin-bottom: 20px
        }

        .f-social a {
            color: #2f80ed;
            margin-right: 10px
        }

        .f-social a i {
            margin-right: 5px
        }

        .f-certify {
            margin-bottom: 20px
        }

        .f-certify a {
            margin-right: 5px;
            display: inline-block;
            vertical-align: top
        }

        .f-certify a._ncsc img {
            width: 85px
        }

        .f-website-title {
            margin-bottom: 10px
        }

        .f-website a {
            margin-right: 10px
        }

        .copyright {
            background-color: #f1f1f1;
            padding: 15px 0
        }

        .copyright p {
            color: #666;
            font-size: 12px
        }

        .top-banner {
            background-color: #fff;
            display: flex;
            margin-top: 10px
        }

        .top-banner section {
            display: flex
        }

        .slider-bannertop {
            position: relative;
            width: 66.67%
        }

        .slider-bannertop.fullwidth {
            width: 100%
        }

        .slider-bannertop .item {
            display: none
        }

        .slider-bannertop .item img {
            width: 100%
        }

        .slider-bannertop .item:first-child {
            display: block
        }

        .slider-bannertop.owl-theme .owl-page span {
            height: 6px;
            width: 6px
        }

        .slider-bannertop.owl-theme .owl-page.active span {
            background-color: #fe7705
        }

        .slider-bannertop .owl-pagination {
            bottom: 5px;
            left: 50%;
            position: absolute;
            transform: translateX(-50%)
        }

        .promote-banner {
            padding-left: 10px;
            width: 33.33%;
            display: grid;
            align-content: space-between;
            align-self: stretch;
            padding-top: 5px
        }

        .promote-item {
            display: block;
            margin-bottom: 5px
        }

        .promote-item:last-child {
            margin-bottom: 0
        }

        .promote-item img {
            width: 100%
        }

        .c-checkitem {
            cursor: pointer;
            display: inline-block;
            margin-right: 15px;
            vertical-align: middle
        }

        .c-checkitem:last-child {
            margin-right: 0
        }

        .c-checkitem .tick-checkbox {
            border: 1px solid #a6a6a6;
            border-radius: 3px;
            margin-right: 2px;
            height: 16px;
            width: 16px
        }

        .c-checkitem .tick-checkbox,
        .c-checkitem p {
            display: inline-block;
            vertical-align: middle
        }

        .c-checkitem.act-check {
            position: relative
        }

        .c-checkitem.act-check::before,
        .c-checkitem.act-check::after {
            background-color: #fff;
            bottom: 3px;
            border-radius: 20px;
            content: '';
            position: absolute;
            width: 2px
        }

        .c-checkitem.act-check::before {
            height: 8px;
            left: 4px;
            transform: rotate(-35deg)
        }

        .c-checkitem.act-check::after {
            height: 12px;
            left: 9px;
            transform: rotate(35deg)
        }

        .c-checkitem.act-check .tick-checkbox {
            background-color: #4a90e2;
            border: none
        }

        .nav-list {
            display: flex;
            flex-wrap: wrap
        }

        .nav-list a {
            align-items: center;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
            color: #333;
            display: flex;
            justify-content: center;
            font-size: 12px;
            line-height: 16px;
            min-height: 40px;
            margin: 0 0 6px 6px;
            padding: 5px 0;
            text-align: center;
            width: calc(20% - 5px)
        }

        .nav-list a:nth-child(5n+1) {
            margin-left: 0
        }

        .show-menu {
            background-color: #fff;
            height: 100%;
            overflow: scroll;
            max-width: 640px;
            padding: 60px 10px 100px;
            position: fixed;
            top: 0;
            transition: .3s;
            right: -100%;
            width: 100%;
            z-index: 99
        }

        .show-menu.active {
            left: 0;
            margin: auto;
            right: 0
        }

        .box-fixed {
            background-color: #fff;
            display: none;
            left: 0;
            max-width: 640px;
            margin: auto;
            position: fixed;
            padding: 10px 10px;
            top: 0;
            right: 0;
            width: 100%;
            z-index: 1
        }

        .box-fixed.active {
            display: block
        }

        .btn-closemenu {
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            color: #333;
            float: right;
            line-height: 21px;
            padding: 7px 5px 7px 0;
            position: relative;
            text-align: right;
            width: 65px
        }

        .btn-closemenu::before,
        .btn-closemenu::after {
            background-color: #333;
            content: '';
            left: 15px;
            height: 10px;
            position: absolute;
            top: 12px;
            width: 1px
        }

        .btn-closemenu::before {
            transform: rotate(45deg)
        }

        .btn-closemenu::after {
            transform: rotate(-45deg)
        }

        .show-menu__link {
            margin: 10px 0 5px
        }

        .show-menu__link .link-item {
            float: left;
            width: calc(50% - 5px)
        }

        .show-menu__link .link-item:first-child {
            margin-right: 10px
        }

        .show-menu__link ul li:last-child {
            border-bottom: none
        }

        .show-menu__link .link-item p {
            font-weight: bold;
            line-height: 16px;
            margin-bottom: 5px
        }

        .show-menu__link .link-item li {
            border-bottom: 1px solid #e0e0e0;
            padding: 6px 0
        }

        .show-menu__link .link-item a {
            color: #333;
            font-size: 12px;
            line-height: 16px
        }

        .show-menu .nav-list a {
            box-shadow: none
        }

        .txt-history {
            color: #2f80ed;
            display: inline-block;
            margin: 15px 0
        }

        .txt-tel {
            margin-bottom: 15px
        }

        .txt-tel a {
            color: #2f80ed
        }

        .btn-readmore {
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            color: #333;
            display: block;
            line-height: 18px;
            margin: 0 auto;
            padding: 10px;
            text-align: center;
            width: calc(100% - 20px)
        }

        .btn-readmore span {
            padding-right: 15px;
            position: relative
        }

        .btn-readmore span::before {
            content: '';
            height: 0;
            position: absolute;
            right: 0;
            width: 0
        }

        .btn-readmore.arrowUp span::before {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #333;
            top: 6px
        }

        .btn-readmore.arrowRight span::before {
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 5px solid #333;
            top: 4px
        }

        .txt-readmore {
            color: #2f80ed;
            font-size: 12px;
            line-height: 16px;
            position: relative;
            padding-right: 8px
        }

        .txt-readmore.alright {
            position: absolute;
            top: 0;
            right: 0
        }

        .txt-readmore::before {
            border-top: 1px solid #2f80ed;
            border-right: 1px solid #2f80ed;
            content: '';
            height: 4px;
            position: absolute;
            transform: rotate(45deg);
            top: 6px;
            right: 0;
            width: 4px
        }

        .breadcrumb {
            background-color: #fff;
            overflow-x: scroll
        }

        .breadcrumb li {
            display: inline-block;
            font-size: 12px;
            line-height: 17px;
            padding-right: 10px;
            position: relative
        }

        .breadcrumb li::before {
            border-top: 1px solid #666;
            border-right: 1px solid #666;
            content: '';
            height: 4px;
            position: absolute;
            right: 1px;
            transform: rotate(45deg);
            top: 6px;
            width: 4px
        }

        .breadcrumb li:last-child::before {
            display: none
        }

        .breadcrumb li a {
            color: #4a90e2
        }

        .box-scroll {
            overflow-y: hidden;
            overflow-x: auto;
            -ms-overflow-style: none;
            -ms-scroll-snap-type: mandatory;
            -webkit-overflow-scrolling: touch
        }

        .c-btnclose {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            line-height: 21px;
            padding: 4px 7px;
            position: absolute;
            text-align: right;
            width: 66px
        }

        .c-btnclose::before,
        .c-btnclose::after {
            background-color: #333;
            content: '';
            left: 14px;
            height: 10px;
            position: absolute;
            top: 9px;
            width: 1px
        }

        .c-btnclose::before {
            transform: rotate(45deg)
        }

        .c-btnclose::after {
            transform: rotate(-45deg)
        }

        .c-checkitem {
            display: inline-block;
            margin-right: 15px;
            vertical-align: middle
        }

        .c-checkitem:last-child {
            margin-right: 0
        }

        .c-checkitem .tick-checkbox {
            border: 1px solid #a6a6a6;
            border-radius: 3px;
            margin-right: 2px;
            height: 16px;
            width: 16px
        }

        .c-checkitem .tick-checkbox,
        .c-checkitem p {
            display: inline-block;
            vertical-align: middle
        }

        .c-checkitem.act-check {
            position: relative
        }

        .c-checkitem.act-check::before,
        .c-checkitem.act-check::after {
            background-color: #fff;
            bottom: 3px;
            border-radius: 20px;
            content: '';
            position: absolute;
            width: 2px
        }

        .c-checkitem.act-check::before {
            height: 8px;
            left: 4px;
            transform: rotate(-35deg)
        }

        .c-checkitem.act-check::after {
            height: 12px;
            left: 9px;
            transform: rotate(35deg)
        }

        .c-checkitem.act-check .tick-checkbox {
            background-color: #4a90e2;
            border: none
        }

        .scrolling_inner {
            position: relative
        }

        .scrolling_inner.scroll-left::before {
            background: linear-gradient(to left, rgba(255 255 255/0), rgba(255 255 255/1));
            content: '';
            left: 0;
            height: 100%;
            position: absolute;
            top: 0;
            width: 40px;
            z-index: 1
        }

        .scrolling_inner.scroll-right::after {
            background: linear-gradient(to right, rgba(255 255 255/0), rgba(255 255 255/1));
            content: '';
            height: 100%;
            position: absolute;
            top: 0;
            right: 0;
            width: 40px
        }

        @media only screen and (max-width:412px) {
            .nav-home {
                max-width: 95%
            }
        }

        @media only screen and (max-width:390px) {
            .nav-home {
                max-width: 100%
            }
        }

        .zone-new-bhx .productbox-bhxapi {
            background-color: #f1f1f1;
            border: 6px solid #008847;
            border-top: 0;
            background: #008847
        }

        .zone-new-bhx .productbox-bhxapi * {
            box-sizing: border-box
        }

        .zone-new-bhx .productbox-bhxapi .hidden {
            display: none !important
        }

        .zone-new-bhx .productbox-bhxapi div.title {
            display: block;
            color: #fff;
            position: relative;
            font-size: 16px;
            background: #008847;
            padding: 10px 170px 10px 35px
        }

        .zone-new-bhx .productbox-bhxapi div.title span.text {
            color: #fff200
        }

        .zone-new-bhx .productbox-bhxapi div.title span.text span::before {
            content: "•";
            margin: 0 5px
        }

        .zone-new-bhx .productbox-bhxapi div.title span.note {
            display: inline-block
        }

        .zone-new-bhx .productbox-bhxapi .dotnew {
            background-color: #ffe66b;
            border-radius: 100%;
            display: block;
            left: 10px;
            height: 8px;
            margin-top: -5px;
            position: absolute;
            top: 50%;
            width: 8px
        }

        .zone-new-bhx .productbox-bhxapi .dotnew .animation {
            border: 1px solid #ffe66b;
            background-color: rgba(255, 230, 107, .2);
            border-radius: 100%;
            display: block;
            height: 8px;
            opacity: 1;
            -moz-animation: sonar 1.25s linear infinite;
            -o-animation: sonar 1.25s linear infinite;
            -webkit-animation: sonar 1.25s linear infinite;
            animation: sonar 1.25s linear infinite;
            width: 8px
        }

        .zone-new-bhx .productbox-bhxapi div.title a {
            margin-left: 2px
        }

        .zone-new-bhx .productbox-bhxapi div.title img {
            display: inline-block;
            vertical-align: middle;
            width: auto
        }

        .zone-new-bhx .productbox-bhxapi div.title span.close {
            position: absolute;
            margin: auto;
            right: 5px;
            cursor: pointer;
            top: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(0, -50%);
            font-size: 12px;
            color: #fff;
            font-weight: normal
        }

        .zone-new-bhx .productbox-bhxapi div.title span.close a {
            color: #fff;
            display: flex;
            align-items: center
        }

        .zone-new-bhx .productbox-bhxapi div.title span.close a .showtext {
            margin-right: 5px;
            text-align: center
        }

        .zone-new-bhx .productbox-bhxapi div.title img {
            display: inline-block;
            vertical-align: middle;
            width: auto
        }

        .zone-new-bhx .productbox-bhxapi .zone-bhx span.note {
            font-style: italic;
            font-size: 12px;
            color: #fff;
            display: inline-block;
            vertical-align: middle
        }

        .zone-new-bhx .productbox-bhxapi .zone-new-bhx span.note {
            font-style: italic;
            font-size: 12px;
            color: #fff;
            display: inline-block;
            vertical-align: middle
        }

        .zone-new-bhx .productbox-bhxapi div.voucherproduct-bhx {
            display: flex;
            background-color: #008847
        }

        .zone-new-bhx .productbox-bhxapi div._voucher {
            background: #fefcea;
            padding: 5px 5px 38px 10px;
            max-width: 190px;
            position: relative;
            margin: 5px 0 5px 5px;
            border-radius: 3px
        }

        .zone-new-bhx .productbox-bhxapi div._voucher .voucher-title {
            color: #3b864d;
            font-weight: 600;
            width: 170px
        }

        .zone-new-bhx .productbox-bhxapi div._voucher .voucher-content {
            margin-bottom: 5px
        }

        .zone-new-bhx .productbox-bhxapi div._voucher .voucher-error {
            color: #f00;
            font-size: 13px
        }

        .zone-new-bhx .productbox-bhxapi div._voucher .voucher-note {
            color: #afafaf;
            font-size: 12px;
            line-height: 14px;
            text-align: justify;
            position: absolute;
            left: 10px;
            right: 10px;
            bottom: 5px
        }

        .zone-new-bhx .productbox-bhxapi div._voucher input {
            padding: 7px 20px;
            border-radius: 4px;
            border: 1px solid #008848;
            width: 100%;
            margin-top: 9px;
            clear: both;
            box-sizing: border-box;
            height: 34px;
            text-indent: initial;
            padding-left: 15px
        }

        .zone-new-bhx .productbox-bhxapi div._voucher input.input-warning {
            border: 1px solid #f00
        }

        .zone-new-bhx .productbox-bhxapi div._voucher button {
            width: 100%;
            height: 34px;
            border: 1px solid #bdbdbd;
            border-radius: 5px;
            background: #bdbdbd;
            color: #fff;
            margin-top: 9px;
            cursor: pointer
        }

        .zone-new-bhx .productbox-bhxapi div._voucher button:not([disabled]) {
            background: #008848;
            border: #008848
        }

        .zone-new-bhx .productbox-bhxapi div.voucher-success {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #fff
        }

        .zone-new-bhx .productbox-bhxapi div.voucher-success .s-img {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 10px
        }

        .zone-new-bhx .productbox-bhxapi div.voucher-success .s-img img {
            display: inline-block
        }

        .zone-new-bhx .productbox-bhxapi div.voucher-success .s-title {
            text-align: center;
            margin-bottom: 10px
        }

        .zone-new-bhx .productbox-bhxapi div.voucher-success .s-pm {
            position: relative;
            padding-left: 20px;
            margin-bottom: 10px;
            word-wrap: break-word
        }

        .zone-new-bhx .productbox-bhxapi div.voucher-success .s-pm:before {
            content: "";
            width: 3px;
            height: 3px;
            border-radius: 50%;
            position: absolute;
            left: 10px;
            top: 7px;
            background: #000
        }

        .zone-new-bhx .productbox-bhxapi div._product {
            display: flex;
            width: calc(100% - 195px);
            padding: 0 5px
        }

        .zone-new-bhx .productbox-bhxapi div._product .productbox-bhxapi-item {
            position: relative;
            text-align: center;
            width: 195px;
            height: 316px
        }

        .zone-new-bhx .productbox-bhxapi div._product .productbox-bhxapi-item a:first-child {
            padding: 5px;
            position: relative;
            display: block;
            height: 100%
        }

        .zone-new-bhx .productbox-bhxapi div._product,
        .zone-new-bhx .productbox-bhxapi-item a img {
            width: 100%;
            height: 100%;
            border-radius: 3px
        }

        .zone-new-bhx .productbox-bhxapi div>a>span {
            position: relative;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            height: 36px;
            margin: 0;
            width: 100%;
            font-size: 12px;
            text-overflow: ellipsis;
            overflow: hidden;
            color: #333;
            line-height: 18px
        }

        .zone-new-bhx .productbox-bhxapi div._product .productbox-bhxapi-item.viewmore-bhx a>span {
            font-size: 13px
        }

        .zone-new-bhx .productbox-bhxapi div>a .productbox-bhxapi-item-img {
            height: auto;
            width: 100px;
            margin: auto
        }

        .zone-new-bhx .productbox-bhxapi div>a .productbox-bhxapi-item-img img {
            width: 100%;
            height: auto;
            margin: 10px auto
        }

        .zone-new-bhx .productbox-bhxapi div>a .zone-price {
            font-size: 14px;
            margin-top: 5px
        }

        .zone-new-bhx .productbox-bhxapi div>a .zone-price .after-price {
            color: #d12c1f;
            display: block;
            font-size: 16px
        }

        .zone-new-bhx .productbox-bhxapi div>a .zone-price .before-price {
            color: #666;
            display: inline-block;
            text-decoration: line-through;
            font-weight: normal
        }

        .zone-new-bhx .productbox-bhxapi div>a .zone-price .percent-price {
            color: #dd1c1a;
            display: inline-block
        }

        .zone-new-bhx .productbox-bhxapi div .zone-buy {
            position: absolute;
            color: #007e3c;
            padding: 4px 19px;
            border: 1px solid #008847;
            border-radius: 4px;
            margin: 5px;
            left: 0;
            right: 0;
            bottom: 5px;
            text-align: center
        }

        .owl-carousel .owl-item .owl-lazy.lazyloaded {
            opacity: 1
        }

        .imgzalo img {
            max-width: 18px;
            margin-top: -5px;
            vertical-align: middle
        }

        a.imgzalo {
            margin-right: 0
        }

        #status-icon:before,
        .lhc-icon-online:before {
            background-image: url(https://cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/homev2/desk/chat.png);
            background-size: 38px 38px;
            background-repeat: no-repeat;
            content: '';
            height: 48px;
            position: absolute;
            width: 48px
        }

        @media screen and (min-width:1300px) {
            .theme-xmas.header:before {
                content: '';
                background-size: 100%;
                width: 131px;
                height: 162px;
                position: absolute;
                z-index: 2
            }

            .theme-xmas.header:after {
                content: '';
                background-size: 100%;
                width: 131px;
                height: 162px;
                position: absolute;
                z-index: 2
            }

            .theme-xmas.header:before {
                background-image: url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/body-left.png);
                left: 0;
                top: 0
            }

            .theme-xmas.header:after {
                background-image: url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/body-right.png);
                top: 0;
                right: 0
            }

            .theme-xmas.header {
                position: relative
            }
        }

        .theme-xmas .iconnewglobal-logo {
            background: url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/Logo/Desktop_TGDD_2x.png) no-repeat 0 0;
            height: 44px;
            width: 182px;
            background-size: 100%
        }

        .dot-stretching {
            position: relative;
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background-color: #288ad6;
            color: #288ad6;
            transform: scale(1.25, 1.25);
            animation: dotStretching 2s infinite ease-in;
            text-align: left
        }

        .dot-stretching::before {
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background-color: #288ad6;
            color: #288ad6;
            animation: dotStretchingBefore 2s infinite ease-in
        }

        .dot-stretching::after {
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background-color: #288ad6;
            color: #288ad6;
            animation: dotStretchingAfter 2s infinite ease-in
        }

        .dot-stretching::before,
        .dot-stretching::after {
            content: '';
            display: inline-block;
            position: absolute;
            top: 0
        }

        #preloader {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 100%;
            height: 100%;
            display: none;
            z-index: 1;
            background: rgba(255, 255, 255, .75)
        }

        .preloader {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 100%;
            height: 100%;
            display: none;
            z-index: 999;
            background: rgba(255, 255, 255, .75)
        }

        .load {
            display: block;
            width: 20px;
            height: 20px;
            border: 5px solid #fff;
            border-top: 5px solid transparent;
            -webkit-animation: load-animate infinite linear 1s;
            animation: load-animate infinite linear 1s;
            border-radius: 100%
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 100%;
            height: 100%;
            display: none;
            z-index: 99;
            background: rgba(255, 255, 255, .75)
        }

        #loader {
            display: block;
            position: relative;
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 80px;
            height: 80px
        }

        #loader:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: 0 auto;
            background: url(https://cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/logo.png) no-repeat center;
            background-size: 45%;
            border-radius: 50%;
            margin: 0;
            background-color: #f8c5468c
        }

        #loader:before {
            content: "";
            display: block;
            position: absolute;
            left: -3px;
            top: -3px;
            width: 100%;
            height: 100%;
            margin: 0 auto;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #f8c546;
            -webkit-animation: spin 1s linear infinite;
            animation: spin 1s linear infinite;
            z-index: 1
        }

        body.dmx-site #loader:after {
            background-color: #288ad68f
        }

        body.dmx-site #loader:before {
            border-top-color: #288ad6
        }

        .desktop #loader {
            top: 15%
        }

        .loaderweb {
            display: block;
            position: relative;
            left: 50%;
            top: 50%;
            width: 80px;
            height: 80px;
            margin: -75px 0 0 -50px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #000;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite
        }

        .loaderweb:before {
            content: "";
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #8e8e8e;
            -webkit-animation: spin 3s linear infinite;
            animation: spin 3s linear infinite
        }

        .loaderweb:after {
            content: "";
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #000;
            -webkit-animation: spin 1.5s linear infinite;
            animation: spin 1.5s linear infinite
        }

        .desktop .loaderweb {
            top: 15%
        }

        #progressTop {
            position: fixed;
            z-index: 99;
            top: 0;
            left: -6px;
            width: 1%;
            height: 5px;
            background-color: #288ad6;
            -moz-border-radius: 1px;
            -webkit-border-radius: 1px;
            border-radius: 1px;
            -moz-transition: width 3000ms ease-out, opacity 500ms linear;
            -ms-transition: width 3000ms ease-out, opacity 500ms linear;
            -o-transition: width 3000ms ease-out, opacity 500ms linear;
            -webkit-transition: width 600ms ease-out, opacity 500ms linear;
            transition: width 5000ms ease-out, opacity 500ms linear
        }

        #progressTop b,
        #progressTop i {
            position: absolute;
            top: 0;
            height: 3px;
            -moz-box-shadow: #777 1px 0 6px 1px;
            -ms-box-shadow: #777 1px 0 6px 1px;
            -webkit-box-shadow: #777 1px 0 6px 1px;
            box-shadow: #777 1px 0 6px 1px;
            -moz-border-radius: 100%;
            -webkit-border-radius: 100%;
            border-radius: 100%
        }

        .bubblingG {
            text-align: center;
            width: 99%;
            height: 40px;
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgba(255, 255, 255, .75);
            z-index: 1
        }

        .bubblingG span {
            display: inline-block;
            vertical-align: middle;
            width: 7px;
            height: 7px;
            margin: 25px 3px;
            background: #fff;
            border-radius: 49px;
            -o-border-radius: 49px;
            -ms-border-radius: 49px;
            -webkit-border-radius: 49px;
            -moz-border-radius: 49px;
            animation: bubblingG 1.5s infinite alternate;
            -o-animation: bubblingG 1.5s infinite alternate;
            -ms-animation: bubblingG 1.5s infinite alternate;
            -webkit-animation: bubblingG 1.5s infinite alternate;
            -moz-animation: bubblingG 1.5s infinite alternate
        }

        .view-more .bubblingG span {
            animation: bubblingG-black 1.5s infinite alternate;
            -o-animation: bubblingG-black 1.5s infinite alternate;
            -ms-animation: bubblingG-black 1.5s infinite alternate;
            -webkit-animation: bubblingG-black 1.5s infinite alternate;
            -moz-animation: bubblingG-black 1.5s infinite alternate
        }

        #bubblingG_1 {
            animation-delay: 0s;
            -o-animation-delay: 0s;
            -ms-animation-delay: 0s;
            -webkit-animation-delay: 0s;
            -moz-animation-delay: 0s
        }

        #bubblingG_2 {
            animation-delay: .45s;
            -o-animation-delay: .45s;
            -ms-animation-delay: .45s;
            -webkit-animation-delay: .45s;
            -moz-animation-delay: .45s
        }

        #bubblingG_3 {
            animation-delay: .9s;
            -o-animation-delay: .9s;
            -ms-animation-delay: .9s;
            -webkit-animation-delay: .9s;
            -moz-animation-delay: .9s
        }

        .loaderLocation {
            border: 2px solid #f3f3f3;
            border-radius: 50%;
            border-top: 2px solid #222;
            width: 20px;
            height: 20px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
            position: absolute;
            top: 3px;
            left: 20%
        }

        .lds-ellipsis {
            display: block;
            position: relative;
            width: 80px;
            height: 80px;
            margin: auto
        }

        .lds-ellipsis div {
            position: absolute;
            top: 33px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #1aa1db;
            animation-timing-function: cubic-bezier(0, 1, 1, 0)
        }

        .lds-ellipsis div:nth-child(1) {
            left: 8px;
            animation: lds-ellipsis1 .6s infinite
        }

        .lds-ellipsis div:nth-child(2) {
            left: 8px;
            animation: lds-ellipsis2 .6s infinite
        }

        .lds-ellipsis div:nth-child(3) {
            left: 32px;
            animation: lds-ellipsis2 .6s infinite
        }

        .lds-ellipsis div:nth-child(4) {
            left: 56px;
            animation: lds-ellipsis3 .6s infinite
        }

        @keyframes lds-ellipsis1 {
            0% {
                transform: scale(0)
            }

            100% {
                transform: scale(1)
            }
        }

        @keyframes lds-ellipsis3 {
            0% {
                transform: scale(1)
            }

            100% {
                transform: scale(0)
            }
        }

        @keyframes lds-ellipsis2 {
            0% {
                transform: translate(0, 0)
            }

            100% {
                transform: translate(24px, 0)
            }
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg)
            }

            100% {
                -webkit-transform: rotate(360deg)
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes bubblingG {
            0% {
                width: 7px;
                height: 7px;
                background-color: #fff;
                transform: translateY(0)
            }

            100% {
                width: 17px;
                height: 17px;
                background-color: #288ad6;
                transform: translateY(-20px)
            }
        }

        @-o-keyframes bubblingG {
            0% {
                width: 7px;
                height: 7px;
                background-color: #fff;
                -o-transform: translateY(0);
            }

            100% {
                width: 17px;
                height: 17px;
                background-color: #288ad6;
                -o-transform: translateY(-20px);
            }
        }

        @-ms-keyframes bubblingG {
            0% {
                width: 7px;
                height: 7px;
                background-color: #fff;
                -ms-transform: translateY(0)
            }

            100% {
                width: 17px;
                height: 17px;
                background-color: #288ad6;
                -ms-transform: translateY(-20px)
            }
        }

        @-webkit-keyframes bubblingG {
            0% {
                width: 7px;
                height: 7px;
                background-color: #fff;
                -webkit-transform: translateY(0)
            }

            100% {
                width: 17px;
                height: 17px;
                background-color: #288ad6;
                -webkit-transform: translateY(-20px)
            }
        }

        @-moz-keyframes bubblingG {
            0% {
                width: 7px;
                height: 7px;
                background-color: #fff;
                -moz-transform: translateY(0)
            }

            100% {
                width: 17px;
                height: 17px;
                background-color: #288ad6;
                -moz-transform: translateY(-20px)
            }
        }

        @keyframes bubblingG-black {
            0% {
                width: 7px;
                height: 7px;
                background-color: #fff;
                transform: translateY(0)
            }

            100% {
                width: 17px;
                height: 17px;
                background-color: #333;
                transform: translateY(-20px)
            }
        }

        @-o-keyframes bubblingG-black {
            0% {
                width: 7px;
                height: 7px;
                background-color: #fff;
                -o-transform: translateY(0);
            }

            100% {
                width: 17px;
                height: 17px;
                background-color: #333;
                -o-transform: translateY(-20px);
            }
        }

        @-ms-keyframes bubblingG-black {
            0% {
                width: 7px;
                height: 7px;
                background-color: #fff;
                -ms-transform: translateY(0)
            }

            100% {
                width: 17px;
                height: 17px;
                background-color: #333;
                -ms-transform: translateY(-20px)
            }
        }

        @-webkit-keyframes bubblingG-black {
            0% {
                width: 7px;
                height: 7px;
                background-color: #fff;
                -webkit-transform: translateY(0)
            }

            100% {
                width: 17px;
                height: 17px;
                background-color: #333;
                -webkit-transform: translateY(-20px)
            }
        }

        @-moz-keyframes bubblingG-black {
            0% {
                width: 7px;
                height: 7px;
                background-color: #fff;
                -moz-transform: translateY(0)
            }

            100% {
                width: 17px;
                height: 17px;
                background-color: #333;
                -moz-transform: translateY(-20px)
            }
        }

        @-webkit-keyframes bounce {
            0% {
                transform: scale(0)
            }

            14% {
                transform: scale(1.15)
            }

            28% {
                transform: scale(1)
            }

            42% {
                transform: scale(1.15)
            }

            70% {
                transform: scale(1)
            }

            100% {
                transform: scale(1)
            }
        }

        @keyframes bounce {
            0% {
                transform: scale(0)
            }

            14% {
                transform: scale(1.15)
            }

            28% {
                transform: scale(1)
            }

            42% {
                transform: scale(1.15)
            }

            70% {
                transform: scale(1)
            }

            100% {
                transform: scale(1)
            }
        }

        @keyframes load-animate {
            0% {
                transform: rotate(0deg)
            }

            50% {
                transform: rotate(180deg);
                opacity: .35
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes dotStretching {
            0% {
                transform: scale(1.25, 1.25)
            }

            50%,
            60% {
                transform: scale(.8, .8)
            }

            100% {
                transform: scale(1.25, 1.25)
            }
        }

        @keyframes dotStretchingBefore {
            0% {
                transform: translate(0) scale(.7, .7)
            }

            50%,
            60% {
                transform: translate(-20px) scale(1, 1)
            }

            100% {
                transform: translate(0) scale(.7, .7)
            }
        }

        @keyframes dotStretchingAfter {
            0% {
                transform: translate(0) scale(.7, .7)
            }

            50%,
            60% {
                transform: translate(20px) scale(1, 1)
            }

            100% {
                transform: translate(0) scale(.7, .7)
            }
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            100% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            100% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @-webkit-keyframes sonar {
            0% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            100% {
                -webkit-transform: scale(4);
                transform: scale(4);
                opacity: 0
            }
        }

        @keyframes sonar {
            0% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            100% {
                -webkit-transform: scale(4);
                transform: scale(4);
                opacity: 0
            }
        }

        @keyframes load-effect {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes shutdown {

            8%,
            46% {
                transform: scale(1, 1);
                opacity: 1
            }

            50% {
                transform: scale(1, .02);
                opacity: .8
            }

            55%,
            100% {
                transform: scale(0, 0);
                opacity: .3
            }
        }

        .falling-container {
            display: block
        }

        .falling-item {
            color: #fff;
            font-size: 1em;
            font-family: Arial
        }

        .falling-item {
            position: fixed;
            top: -10%;
            z-index: 9999;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: default;
            -webkit-animation-name: snowflakes-fall, snowflakes-shake;
            -webkit-animation-duration: 10s, 3s;
            -webkit-animation-timing-function: linear, ease-in-out;
            -webkit-animation-iteration-count: infinite, infinite;
            -webkit-animation-play-state: running, running;
            animation-name: snowflakes-fall, snowflakes-shake;
            animation-duration: 10s, 3s;
            animation-timing-function: linear, ease-in-out;
            animation-iteration-count: infinite, infinite;
            animation-play-state: running, running
        }

        .falling-item:nth-of-type(0) {
            left: 1%;
            -webkit-animation-delay: 0s, 0s;
            animation-delay: 0s, 0s
        }

        .falling-item:nth-of-type(1) {
            left: 10%;
            -webkit-animation-delay: 1s, 1s;
            animation-delay: 1s, 1s
        }

        .falling-item:nth-of-type(2) {
            left: 20%;
            -webkit-animation-delay: 6s, .5s;
            animation-delay: 6s, .5s
        }

        .falling-item:nth-of-type(3) {
            left: 30%;
            -webkit-animation-delay: 4s, 2s;
            animation-delay: 4s, 2s
        }

        .falling-item:nth-of-type(4) {
            left: 40%;
            -webkit-animation-delay: 2s, 2s;
            animation-delay: 2s, 2s
        }

        .falling-item:nth-of-type(5) {
            left: 50%;
            -webkit-animation-delay: 8s, 3s;
            animation-delay: 8s, 3s
        }

        .falling-item:nth-of-type(6) {
            left: 60%;
            -webkit-animation-delay: 6s, 2s;
            animation-delay: 6s, 2s
        }

        .falling-item:nth-of-type(7) {
            left: 70%;
            -webkit-animation-delay: 2.5s, 1s;
            animation-delay: 2.5s, 1s
        }

        .falling-item:nth-of-type(8) {
            left: 80%;
            -webkit-animation-delay: 1s, 0s;
            animation-delay: 1s, 0s
        }

        .falling-item:nth-of-type(9) {
            left: 90%;
            -webkit-animation-delay: 3s, 1.5s;
            animation-delay: 3s, 1.5s
        }

        @-webkit-keyframes snowflakes-fall {
            0% {
                top: -10%
            }

            100% {
                top: 100%
            }
        }

        @-webkit-keyframes snowflakes-shake {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }

            50% {
                -webkit-transform: translateX(80px);
                transform: translateX(80px)
            }

            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @keyframes snowflakes-fall {
            0% {
                top: -10%
            }

            100% {
                top: 100%
            }
        }

        @keyframes snowflakes-shake {
            0% {
                transform: translateX(0)
            }

            50% {
                transform: translateX(80px)
            }

            100% {
                transform: translateX(0)
            }
        }

        .falling-item {
            background-size: 100%;
            background-repeat: no-repeat
        }

        .falling-item:nth-of-type(1) {
            left: 10%;
            -webkit-animation-delay: 6s, .5s;
            animation-delay: 6s, .5s;
            font-size: 2.5em
        }

        .falling-item:nth-of-type(2) {
            left: 20%;
            -webkit-animation-delay: 5s, 5.5s;
            animation-delay: 5s, 5.5s;
            font-size: 1.9em
        }

        .falling-item:nth-of-type(3) {
            left: 40%;
            -webkit-animation-delay: 4s, 2s;
            animation-delay: 4s, 2s;
            font-size: 2.4em
        }

        .falling-item:nth-of-type(4) {
            left: 50%;
            -webkit-animation-delay: 3s, 1.5s;
            animation-delay: 3s, 1.5s;
            font-size: 2.1em
        }

        .falling-item:nth-of-type(5) {
            left: 80%;
            -webkit-animation-delay: 2s, 2s;
            animation-delay: 2s, 2s;
            font-size: 2.3em
        }

        .falling-item:nth-of-type(6) {
            left: 90%;
            -webkit-animation-delay: 1s, 0s;
            animation-delay: 1s, 0s;
            font-size: 2.2em
        }

        @keyframes flickerAnimation {
            0% {
                opacity: 1
            }

            50% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-o-keyframes flickerAnimation {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes flickerAnimation {
            0% {
                opacity: 1
            }

            50% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes flickerAnimation {
            0% {
                opacity: 1
            }

            50% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        .animate-flicker {
            -webkit-animation: flickerAnimation .5s infinite;
            -moz-animation: flickerAnimation .5s infinite;
            -o-animation: flickerAnimation .5s infinite;
            animation: flickerAnimation .5s infinite
        }

        @keyframes lighting {
            0% {
                content: url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/light-pine-tree.png)
            }

            100% {
                content: url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/pine-tree.png)
            }
        }

        .theme-xmas .pine-tree img {
            width: 10%;
            position: fixed;
            z-index: -1
        }

        .theme-xmas .pine-tree-left {
            bottom: 0;
            cursor: pointer;
            z-index: -1;
            animation: lighting 1s infinite;
            transform: matrix(-.99, -.14, -.14, .99, 0, 0);
            right: 93.5vw
        }

        .theme-xmas .pine-tree-right {
            bottom: 0;
            left: 93.5vw;
            cursor: pointer;
            z-index: -1;
            animation: lighting 1s infinite;
            transform: rotate(-8.21deg)
        }

        .theme-xmas .pine-tree .santa-left {
            bottom: 0;
            left: 1vw;
            cursor: pointer;
            z-index: -1;
            width: 6vw
        }

        .theme-xmas .pine-tree .santa-right {
            bottom: 0;
            right: 0;
            cursor: pointer;
            z-index: -1;
            width: 3vw
        }

        .theme-xmas .snowfall {
            position: fixed;
            pointer-events: none;
            z-index: 2
        }

        /*  11:59:59 22/12/2022 */
        .listproduct {
            display: grid;
            grid-auto-rows: minmax(min-content, max-content);
            grid-template-columns: repeat(5, minmax(0, 1fr));
            border-left: 1px solid #f1f1f1;
            border-top: 1px solid #f1f1f1
        }

        .listproduct.listproduct-col3 {
            grid-template-columns: repeat(3, minmax(0, 1fr))
        }

        .listproduct.carousel {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory
        }

        .listproduct.carousel .item {
            scroll-snap-align: start;
            margin-right: 5px;
            background-color: #fff;
            border-radius: 4px;
            min-width: 140px;
            max-width: 225px;
            flex: 0 0 33vw
        }

        .listproduct img {
            max-width: 100%
        }

        .listproduct .item {
            display: block
        }

        .listproduct .item a {
            display: block
        }

        .pk-sale .listproduct .item {
            background-color: #fff
        }

        .listproduct .item {
            border-bottom: 1px solid #f1f1f1;
            border-right: 1px solid #f1f1f1;
            padding: 10px 15px 20px;
            overflow: hidden
        }

        .listproduct h3 {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            font-size: 14px;
            line-height: 20px;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 5px
        }

        .listproduct p.preorder {
            background-color: #e91e63;
            border-radius: 4px;
            color: #fff;
            display: -webkit-inline-box;
            font-size: 11px;
            margin-right: 4px;
            padding: 0 5px;
            white-space: nowrap;
            max-width: 90%;
            margin-bottom: 5px
        }

        .listproduct-col3 h3 {
            font-size: 13px;
            line-height: 16px
        }

        .listproduct h3 span {
            color: #fc773b
        }

        .listproduct .price {
            color: #222;
            display: block;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            margin-bottom: 5px
        }

        .listproduct .price.twoprice {
            font-weight: normal;
            font-size: 14px;
            margin-bottom: 5px
        }

        .listproduct .price.twoprice:before {
            content: '';
            width: 15px;
            height: 15px;
            background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAADIWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS41LWMwMTQgNzkuMTUxNDgxLCAyMDEzLzAzLzEzLTEyOjA5OjE1ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjQwRDA1QTlFQzc2NTExRUI5RUFEQUQ5QzM0RTRFREY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjQwRDA1QTlGQzc2NTExRUI5RUFEQUQ5QzM0RTRFREY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NDBEMDVBOUNDNzY1MTFFQjlFQURBRDlDMzRFNEVERjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDBEMDVBOURDNzY1MTFFQjlFQURBRDlDMzRFNEVERjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6rTY90AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFRQTFRFR3BM0QAczwIc0AId0AEc0AEc0AEczwEc0AEc0AEb0AEbzwAgzwAQ0AEc0QIczwEa0QEc0QIe0AId1gAh0QEb0QIdzwAg0AIbzwAbzwUb0gAd0AIcLM/rQgAAABt0Uk5TAH+A31+/QCDv388QEK9/UG9vnx+PjzCfMDBPXpRnnQAAASVJREFUKM+Nk8uWgzAMQ0VJiAOkPPqcuf//n7OABGhZTFb4WPKRZSHtXxdCp/PXTSkCWHLhu3kxwOKCeHwAmhr8eJOkp/NQD/vuBXyzlaGFy6FbHadVu/4A7lOLg3VcqDduXW/8upck3WkLCcqn5ypJwchrPA3qLLHBekkOnwUbbcRCoY+SUtF15SW9lpmSJpIk473WM05y3PMw4kHNRBuk3z7XRi8Ri+8RbN7sjtz2bYWXkdctbSvsQQot42ZCv2IkSY9F2pxdwCSlAr8yS3NZzJEkTXtb6nZvi5PUGcXHCPYuay/Aa6EfTtKu/nRxO32MW0RiyLc5jcNwFp2zeFXQ7rLb+I/wDRG8+5GkMHmIzXFaeBhAjAZY1X/9J8GlBZHGXv98fzV0E9m7ufBbAAAAAElFTkSuQmCC) no-repeat left center;
            background-size: 15px 15px;
            margin: 2px 5px 0 0;
            display: inline-block;
            vertical-align: top
        }

        .listproduct-col3 .price {
            font-size: 14px;
            line-height: 16px
        }

        .listproduct .price.red {
            color: #d0021c
        }

        .listproduct .box-p {
            margin-bottom: 5px
        }

        .listproduct .price-old {
            color: #666;
            display: inline-block;
            font-size: 14px;
            line-height: 17px;
            text-decoration-line: line-through
        }

        .listproduct .price-old.black {
            color: #333
        }

        .listproduct-col3 .price-old {
            font-size: 12px;
            line-height: 16px
        }

        .listproduct .percent {
            color: #333;
            display: inline-block;
            font-size: 13px;
            line-height: 17px
        }

        .listproduct .percent.red {
            color: #d0021c
        }

        .listproduct-col3 .percent {
            font-size: 12px;
            line-height: 16px
        }

        .listproduct .item-rating {
            margin-bottom: 5px;
            display: flex;
            align-items: flex-end
        }

        .listproduct .item-compare {
            font-size: 0;
            margin-bottom: 5px
        }

        .listproduct .item-compare span {
            border: 1px solid #e0e0e0;
            border-radius: 2px;
            color: #333;
            display: inline-block;
            font-size: 12px;
            line-height: 12px;
            margin-right: 5px;
            padding: 4px 5px;
            white-space: nowrap
        }

        .listproduct .item-compare.gray-bg span {
            border: 1px solid #eaeaea;
            background: #eaeaea
        }

        .listproduct .item-rating p {
            display: inline-block
        }

        .listproduct .item-rating-total {
            color: #333;
            font-size: 12px;
            line-height: 14px;
            margin-left: 5px
        }

        .listproduct .shiping {
            color: #333;
            font-size: 12px;
            line-height: 16px;
            margin-top: 7px
        }

        .listproduct .item-img {
            position: relative;
            margin-bottom: 10px;
            display: block;
            overflow: hidden
        }

        .listproduct .item-img img.lbliconimg {
            width: auto !important;
            height: 40px
        }

        .listproduct .item-img.item-img_1942 {
            height: 160px
        }

        .listproduct .item-img img.lbliconimg_1942 {
            bottom: 0
        }

        .listproduct .item-img.item-img_9758 {
            height: 145px
        }

        .listproduct .item-img .lbl-imported {
            position: absolute;
            left: 0;
            bottom: 0;
            padding: 5px 10px;
            color: #000;
            background: linear-gradient(91.91deg, #e3e3e3 3.02%, #f7f7f7 105.46%);
            border-radius: 2px;
            height: 25px;
            line-height: 1.3;
            font-size: 13px
        }

        .listproduct .item-img .lb-b2p1 {
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: #fec200;
            padding: 2px 4px;
            color: #222;
            white-space: nowrap;
            line-height: normal
        }

        .listproduct .lb-img {
            bottom: 0;
            position: absolute;
            right: 5px
        }

        .result-label {
            border-radius: 20px;
            display: inline-block;
            font-size: 0;
            overflow: hidden;
            max-width: 100%;
            padding-right: 8px
        }

        .result-label span {
            color: #fff;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            font-size: 10px;
            line-height: 13px;
            margin-left: 3px;
            overflow: hidden;
            padding: 4px 0 0 3px;
            text-overflow: ellipsis;
            white-space: nowrap;
            -webkit-line-clamp: 2;
            text-transform: uppercase
        }

        .result-label img {
            float: left;
            max-width: 20px
        }

        .result-label.temp1 {
            background: linear-gradient(to right, #ef3006, #c60004)
        }

        .result-label.temp2 {
            background: linear-gradient(to right, #0358d6, #054bab)
        }

        .result-label.temp3 {
            background: linear-gradient(to right, #e91f63, #db2663)
        }

        .result-label.temp4 {
            background: linear-gradient(to right, #3bacf0, #1b6dc1)
        }

        .result-label.temp5 {
            background: linear-gradient(to right, #faab08, #d42611)
        }

        .result-label.temp6 {
            background: linear-gradient(to right, #af63cf, #3327a7)
        }

        .item-label {
            font-size: 0;
            height: 22px
        }

        .item-label span {
            border-radius: 2px;
            font-size: 11px;
            line-height: 12px;
            display: inline-block;
            margin-right: 4px;
            padding: 3px
        }

        .ln-banchay {
            background-color: #fbdddd;
            color: #eb5757
        }

        .lb-tragop {
            background-color: #f1f1f1;
            color: #333
        }

        .item-txt-online {
            color: #333;
            font-size: 12px;
            line-height: 16px;
            margin-top: 0 !important;
            margin-bottom: 5px
        }

        .listproduct .item-gift {
            color: #333;
            font-size: 13px;
            margin-bottom: 5px
        }

        .listproduct .item-gift b {
            font-weight: normal
        }

        .utility {
            margin-top: 7px
        }

        .utility p {
            color: #333;
            font-size: 12px;
            line-height: 19px;
            display: flex
        }

        .utility p:before {
            content: '●';
            margin-right: 4px;
            margin-bottom: 2px;
            margin-top: -1px;
            color: #333;
            font-size: 10px
        }

        .item-bottom {
            font-size: 12px;
            margin-bottom: 5px
        }

        .item-ss {
            color: #2f80ed;
            font-size: 12px;
            line-height: 16px;
            margin-top: 7px
        }

        .item-ss i {
            background: url('//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/iconcompare/icon_plus.png') no-repeat center;
            background-size: 100%;
            height: 16px;
            width: 16px;
            display: inline-block;
            vertical-align: text-bottom
        }

        .item-ss.active i {
            background: url('//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/iconcompare/icon_checked.png') no-repeat center;
            background-size: 100%
        }

        .btn-buyslt {
            border: 1px solid #fb6e2e;
            border-radius: 3px;
            color: #fb6e2e;
            display: block;
            font-size: 12px;
            line-height: 16px;
            margin-top: 10px;
            padding: 8px 5px;
            text-align: center
        }

        .watched .owl-carousel .owl-stage,
        .watched .owl-carousel .owl-stage .owl-item {
            display: flex;
            flex-wrap: wrap
        }

        .listproduct .remain_quantity {
            position: relative;
            height: 100%;
            display: block;
            padding-bottom: 25px
        }

        .listproduct .remain_quantity .rq_count {
            min-height: 20px;
            padding-left: 21px;
            background-color: #ddd;
            border-radius: 25px;
            line-height: 20px;
            text-align: center;
            width: 100%;
            bottom: 0;
            left: 0;
            position: absolute;
            color: #000;
            overflow: hidden
        }

        .listproduct .remain_quantity .rq_count i {
            display: block;
            height: 100%;
            background: #f7c913 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAUCAYAAABiS3YzAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFFmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNi4wLWMwMDMgNzkuMTY0NTI3LCAyMDIwLzEwLzE1LTE3OjQ4OjMyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgMjIuMSAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDIxLTA0LTI4VDExOjI0OjUyKzA3OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMS0wNC0yOFQxNDo1OTo1MCswNzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMS0wNC0yOFQxNDo1OTo1MCswNzowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5NmUwOTRjNi1jODk2LWRiNGMtOGQ3OS1jYjEyZTY4NGY1MmMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTZlMDk0YzYtYzg5Ni1kYjRjLThkNzktY2IxMmU2ODRmNTJjIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6OTZlMDk0YzYtYzg5Ni1kYjRjLThkNzktY2IxMmU2ODRmNTJjIj4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY3JlYXRlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo5NmUwOTRjNi1jODk2LWRiNGMtOGQ3OS1jYjEyZTY4NGY1MmMiIHN0RXZ0OndoZW49IjIwMjEtMDQtMjhUMTE6MjQ6NTIrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCAyMi4xIChXaW5kb3dzKSIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz57d7QYAAADDklEQVQ4jX2UXYhVVRTHf2udfe69M6PNOOoQMyET9DWkD441cB9yTEaCQCRrtCAfJApiQLAU7CmyDwgUopeGwvQpGicfyifxITDCyigUS1A0MBHUGJ3m6945Z+/lw3GcuXPPde2HA2ut/Vv/vVhnid2+RWYCgAFhsBdAZdVjTzI1URbvV1o620mxdJnlD/+iHx855wd7K9HoHxj1JraxHYCEFgA8ntjFKw02KbwE0mewAigCCdhlgdNJmh6JI3d+1ifj9dD+1hpokPC8i9xBkLU5IhZdtuNJSA+Y2ala/4a2eajIdo30G0AbksxAZAGB8TRNBs3s5JxLsy4aIvK6RvrtA4HTkzBbXVSEVucKP4jIgJAdRWJM4qfU6eGGsOBhfAy6n0DLm/LUl+IoPhxr3O60gHrXgrkl+81wucA0gWoFKQ+g+w/B+hfzuwKPmNi7YrNIMtDVphLdMKNQlzkzBS5Gt76BvPkeNLXgt/fB2I0GT7LrUXK7y4FuzQVO3IHObnTbW8irQ1kXRobh4lkolqBQyr41Jp2mzU87kDX1Cqdh3Xr07feR1c/M+/86A+ueg0IJmZnErv1Td9VrU58zY/nCCQGQtWXknU+RR3tg8n9Y8lDmf20I6eiCO2PYwT35DbBQcAj/1UWqVWxkGJtrwdAHGbSnF8ZuEo4OY5fO50JF7ZZDws+Y7q6pduFP+P0UTFXQz0fmA2d+JHzxIXb2NCxbAVI/0iHoRedS/S0oc/sks1ITxDH0l5EXtmXJX30CJ0azPrZ35KoEu+q9u+TE9F+T8J3AKzXPWNqG7voIqjOEA3uxk8cgTWFpawMgYHwdq68qQOR1n8BMTcLGLVCZJuzbgZ0YBVVoam4MxK5gfKYSENvQDUAqvCwajiL3/v1Vj8P0BFy7ks2kNl4JGONpkM0YPwHz0CQLb4mi8KUJHQQPSQKFYu1WqgfeTL0OGtxff4vLf5943RyMUUQDxdKDgMEkHIq89i8E5inFA1EUmvH6LFHYGQk9Bj33VE0g9rchv6apHnNxesElrlJZVO0uWQIx2gF9TMkAAAAASUVORK5CYII=') no-repeat left top;position:absolute;left:0;top:0;min-width:21px}.listproduct .remain_quantity .rq_count i.fs-iconfire{background:linear-gradient(64.85deg,#fcb500 23.67%,#ffd41d 106.12%);min-width:15px}.listproduct .remain_quantity .rq_count i.fs-iconfire img{width:22px;height:auto;left:-1px;top:-9px;position:absolute;z-index:1}.listproduct .remain_quantity .rq_count b{display:block;position:relative;z-index:1;font-weight:normal}span.rq_count.upcomming{display:block;overflow:hidden;text-align:center;color:#000;padding:3px 10px;border-radius:25px;background:#efefef;font-size:12px;font-weight:lighter}span.rq_count.fscount.just-sale{padding:0}.listproduct span.rq_count.fscount.just-sale i{background:#fff0b9}.listproduct span.rq_count.fscount.just-sale i img{display:none}.loading-border{position:relative}.loading-border .bubblingG{height:100%;top:0;padding-top:50%}.prods-group ul{display:flex;margin-bottom:5px;justify-content:flex-start;flex-wrap:wrap}.prods-group ul li{padding:5px 8px !important;border:1px solid #e0e0e0 !important;border-radius:2px;color:#333;display:inline-flex !important;font-size:12px;line-height:16px;margin-bottom:5px;margin-right:4px}.prods-group ul li.act,.prods-group ul li:hover{border-color:#2f80ed !important;color:#2f80ed !important}.listproduct .item-img{margin-top:10px}.listproduct .item-img img{margin-bottom:0;margin-top:8px}.listproduct .item a:hover .item-img img{margin-bottom:8px;margin-top:0}.listproduct .item .item-img img{margin-top:8px;-webkit-transition:all 300ms ease-in-out;-moz-transition:all 300ms ease-in-out;transition:all 300ms ease-in-out}.listproduct .item a:hover h3{color:#288ad6}.owl-carousel button{opacity:.3}.owl-carousel:hover button{opacity:1}.lst-iclabel{position:absolute;z-index:1;bottom:0;left:0;display:flex;gap:5px;height:40px}.lst-iclabel img{width:auto !important;height:100% !important;margin-top:0 !important}.listproduct .item{background-color:#fff;padding:10px 10px 20px}.listproduct h3{margin-bottom:8px;line-height:21px}.listproduct .item-img{margin-top:0}.listproduct .item-img img{height:auto;display:block;margin:0 auto}.listproduct p.preorder{margin-bottom:8px}.result-label{margin-bottom:5px}.listproduct .price{color:#d0021c;font-size:18px;margin-bottom:8px}.listproduct .price small{color:#eb5757;background:#fff0e9;border-radius:4px;padding:1px 2px 2px 2px;margin-left:7px;font-size:14px}.item-label{height:23px}.listproduct .item-gift,.listproduct .item-txt-online{color:#666;font-size:14px;margin-bottom:8px}.listproduct .vote-txt{color:#999}.listproduct .vote-txt b{color:#fb6e2e;display:inline-block;vertical-align:middle}.listproduct .vote-txt i{margin:0 10px 2px 5px}.lb-tragop{background-color:#f1f1f1;color:#333}.item-label span{border-radius:2px;font-size:11px;line-height:12px;display:inline-block;margin-right:4px;padding:3px}body{background:#f3f3f3}.bg-ellipse{position:absolute;background-size:contain;top:40px;left:0;right:0;z-index:-1;height:100vh}.readmore-btn{background-color:#fff;border-radius:4px;border:1px solid #e0e0e0;color:#333;display:block;line-height:16px;margin:5px auto 15px;padding:15px 20px;text-align:center;width:340px}.readmore-btn span{position:relative;padding-right:15px}.readmore-btn span::before{border-top:5px solid transparent;border-bottom:5px solid transparent;border-left:5px solid #333;content:''; position:absolute; top:calc(50% - 5px); right:0
            }

            .readmore-btn-link.hide {
                display:none
            }

            .readmore-txt {
                font-size:12px; line-height:16px; position:relative; padding-right:8px
            }

            .readmore-txt.blue {
                color:#2f80ed
            }

            .readmore-txt:before {
                content:''; height:5px; position:absolute; transform:rotate(45deg); right:0; top:5px; width:5px
            }

            .readmore-txt.blue:before {
                border-top:1px solid #2f80ed; border-right:1px solid #2f80ed
            }

            .home-slider {
                position:relative; margin:30px 0; border:8px; display:block
            }

            .home-slider .owl-dots {
                bottom:5px; left:50%; position:absolute; transform:translateX(-50%)
            }

            .home-slider .owl-dot {
                background:#e5e5e5 !important; height:1px; margin:0 1px; width:10px
            }

            .home-slider .owl-dot.active {
                background:#f80 !important
            }

            .home-slider .owl-carousel .owl-stage {
                align-items:center
            }

            .prd-promo {
                margin-bottom:30px; padding-bottom:1px; border-radius:14px; display:block
            }

            .theme-xmas .prd-promo {
                background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/bg-tuan-le-desktop.png?v=1); background-size:100% 100%
            }

            .prd-promo .prd-promo__top img.lazyload {
                height:120px; display:block
            }

            .prd-promo .slide-prd {
                display:block; margin:12px 0 0; padding:0
            }

            .prd-promo .slide-prd li {
                height:430px; border-radius:4px; overflow:hidden
            }

            .prd-promo .slide-prd.listproduct .owl-item {
                border:0
            }

            .prd-promo .listproduct {
                border:none; padding:10px 10px 0
            }

            .prd-promo .listproduct .owl-item:first-child {
                border:0
            }

            .prd-promo.prd-another .listproduct {
                padding:0 10px 10px
            }

            .slide-prd .owl-nav {
                position:absolute; top:38%; width:100%
            }

            .slide-prd .owl-nav button span {
                font-size:0
            }

            .slide-prd .owl-nav button {
                position:absolute; left:-17px; height:90px; width:45px; background:rgba(255, 255, 255, .8) !important; box-shadow:0 4px 4px rgba(0, 0, 0, .25); border-radius:0 4px 4px 0 !important
            }

            .slide-prd .owl-nav button.owl-next {
                border-radius:4px 0 0 4px !important; right:-17px; left:unset
            }

            .slide-prd .owl-nav button:after {
                content:''; position:absolute; border-top:3px solid #666; border-left:3px solid #666; height:15px; width:15px; right:10px; top:36px; transform:rotate(-45deg)
            }

            .slide-prd .owl-nav button.owl-next:after {
                transform:rotate(135deg)
            }

            .prd-another {
                background:#041e84
            }

            .prd-promo .slide-prd {
                display:block; margin:12px 0 0; padding:0
            }

            .prd-promo .slide-prd li {
                height:430px; border-radius:4px; overflow:hidden
            }

            .prd-promo .slide-prd.listproduct .owl-item {
                border:0
            }

            .prd-promo .item {
                background-color:#fff; border-radius:4px; margin:0 5px
            }

            .another-slider .item {
                border-radius:14px
            }

            .prd-promo__title.text {
                display:block; overflow:hidden; color:#fff; font-weight:700; font-size:45px; line-height:40px; letter-spacing:2px; padding:26px 0; text-align:center; height:unset
            }

            .prd-another .home-slider {
                width:calc(100% - 20px); margin:0 auto 15px
            }

            .prd-promo__top .prd-promo__title {
                height:auto; color:#000; font-size:24px; font-weight:bold; font-style:italic; float:left; line-height:27px; padding:15px 15px 5px
            }

            .slide-prd .owl-nav {
                position:absolute; top:38%; width:100%
            }

            .slide-prd .owl-nav button span {
                font-size:0
            }

            .slide-prd .owl-nav button {
                position:absolute; left:-17px; height:90px; width:45px; background:rgba(255, 255, 255, .8) !important; box-shadow:0 4px 4px rgba(0, 0, 0, .25); border-radius:0 4px 4px 0 !important
            }

            .slide-prd .owl-nav button.owl-next {
                border-radius:4px 0 0 4px !important; right:-17px; left:unset
            }

            .slide-prd .owl-nav button:after {
                content:''; position:absolute; border-top:3px solid #666; border-left:3px solid #666; height:15px; width:15px; right:10px; top:36px; transform:rotate(-45deg)
            }

            .slide-prd .owl-nav button.owl-next:after {
                transform:rotate(135deg)
            }

            .prd-promo .seeall {
                display:block; overflow:hidden; background:#fff; border-radius:4px; text-align:center; padding:12px; color:#333; margin:5px auto 15px; width:370px
            }

            .name-box {
                display:block; overflow:hidden; padding:15px 22px; font-size:22px; line-height:36px; color:#333; text-transform:uppercase
            }

            .option-promo {
                display:flex; overflow:hidden; text-align:center; margin:30px 0; border-radius:12px; margin:0 0 30px; position:relative; z-index:1
            }

            .option-promo li {
                display:inline-block; vertical-align:middle; width:20%; margin-right:2%; width:calc(100%/3 - 16px); margin-right:20px; background-color:#fff; border-radius:12px; padding:15px 0
            }

            .theme-xmas .option-promo li {
                background-image:url("//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/bg-goi-y-hom-nay.png?v=1")
            }

            .option-promo li:last-child {
                margin-right:0
            }

            .option-promo li a {
                display:block; overflow:hidden
            }

            .option-promo li img {
                display:inline-block; vertical-align:middle; height:70px; width:auto
            }

            .option-promo li span {
                display:inline-block; vertical-align:middle; overflow:hidden; color:#222; font-size:22px; line-height:28px; text-align:left; margin-left:10px; max-width:65%
            }

            .slider-banner .owl-nav, .trademark-slider .owl-nav {
                position:absolute; top:36%; width:100%
            }

            .slider-banner .owl-nav button span, .trademark-slider .owl-nav button span {
                font-size:0
            }

            .slider-banner .owl-nav button, .trademark-slider .owl-nav button {
                background:#fff !important; height:44px; position:absolute; width:44px; opacity:.7; border-radius:100% !important; border:#e1e1e1; left:-22px; filter:drop-shadow(0 4px 7px rgba(0, 0, 0, .15)); top:0; transform:translateY(0)
            }

            .slider-banner .owl-nav button.owl-next, .trademark-slider .owl-nav button.owl-next {
                right:-22px; left:unset
            }

            .slider-banner .owl-nav button::after, .trademark-slider .owl-nav button::after {
                content:''; position:absolute; border-top:2px solid #666; border-left:2px solid #666; height:8px; width:8px; right:19px; top:18px; transform:rotate(135deg)
            }

            .slider-banner .owl-nav button.owl-prev::after, .trademark-slider .owl-nav button.owl-prev::after {
                left:20px; top:18px; transform:rotate(-45deg)
            }

            .shopping-trends {
                display:block; overflow:hidden; margin:0 0 30px; border-radius:12px; background:linear-gradient(90deg, #ffecd2 0%, #fcb69f 100%)
            }

            .theme-xmas .shopping-trends {
                background:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/bg-xu-huong-mua-sam-desktop.png?v=1)
            }

            .theme-xmas .shopping-trends .name-box {
                color:#fff
            }

            .shopping-trends ul {
                display:flex; flex-flow:row wrap; overflow:hidden; padding:0 22px 30px
            }

            .shopping-trends ul li {
                float:left; width:280px; margin:0 12px 0 0; position:relative
            }

            .shopping-trends ul li span {
                position:absolute; bottom:55px; left:18px; font-size:19px; line-height:26px; color:#333; white-space:nowrap; text-overflow:ellipsis; overflow:hidden; max-width:250px; height:24px
            }

            .shopping-trends ul li strong {
                position:absolute; bottom:24px; left:18px; font-size:17px; line-height:20px; color:#2f80ed; font-weight:500
            }

            .shopping-trends ul li:last-child {
                margin-right:0; float:right
            }

            .shopping-trends ul li a {
                display:block; overflow:hidden
            }

            .shopping-trends ul li img {
                display:block; width:100%
            }

            .cate-feature {
                display:block; overflow:hidden; background:#fff; margin-bottom:30px; border-radius:12px
            }

            .theme-xmas .cate-feature:before {
                background-image:url("//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/bg-dm-top.png?v=1"); content:''; width:70px; height:70px; position:absolute; right:0; background-size:100%; background-repeat:no-repeat
            }

            .dmx-site .cate-feature:before {
                display:none
            }

            .theme-xmas .cate-feature {
                position:relative
            }

            .theme-xmas .cate-feature:after {
                background-position:left, right; width:100%; height:50px; position:absolute; right:0; bottom:0; content:''
            }

            .theme-xmas .cate-feature:after {
                background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/bg-dm-bottom-left.png?v=1), url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/bg-dm-bottom-right.png?v=1); background-size:156px 54px; background-repeat:no-repeat
            }

            .theme-xmas .cate-feature .name-box:before {
                background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/icon-santa-desktop.png?v=1)
            }

            .theme-xmas .cate-feature .name-box:before {
                content:''; background-size:100%; width:48px; height:48px; position:absolute; top:0; left:0
            }

            .theme-xmas .cate-feature .name-box {
                padding:15px 15px 15px 50px
            }

            .cate-feature .box-cate {
                display:block; overflow:hidden; padding:0 40px 30px
            }

            .cate-feature .box-cate aside {
                display:flex; align-items:flex-start; overflow:hidden
            }

            .box-cate.has-scroll:not(.slick-initialized) {
                display:grid; grid-auto-rows:minmax(min-content, max-content); grid-template-columns:repeat(10, minmax(0, 1fr)); text-align:center
            }

            .box-cate.has-scroll h3 {
                text-align:center
            }

            .box-cate.has-scroll h3:nth-child(n+21) {
                display:none
            }

            .box-cate.has-scroll.slick-initialized h3:nth-child(n+21) {
                display:block
            }

            .box-cate.has-scroll .slick-arrow.slick-disabled {
                display:none !important
            }

            .box-cate.has-scroll .slick-arrow.prev-arrow {
                left:0; top:-50px
            }

            .box-cate.has-scroll .slick-arrow.next-arrow {
                right:0; top:-50px
            }

            .box-cate.has-scroll .slick-arrow {
                width:44px; height:44px; border-radius:50%; filter:drop-shadow(0 4px 7px rgba(0, 0, 0, .15))
            }

            .box-cate.has-scroll .slick-arrow::before {
                height:10px; width:10px
            }

            .box-cate.has-scroll .slick-arrow.next-arrow::before {
                right:17px; top:17px
            }

            .box-cate.has-scroll .slick-arrow.prev-arrow::before {
                left:17px
            }

            .box-cate.has-scroll h3 a span {
                min-height:38px; display:block; margin-top:8px
            }

            .box-cate.has-scroll h3 img {
                display:block; margin:auto; width:auto; height:60px
            }

            .box-cate aside h3 {
                display:inline-block; vertical-align:top; padding:10px 0
            }

            .box-cate aside h3 a {
                display:block; overflow:hidden; color:#333; text-align:center; width:112px
            }

            .box-cate aside h3 .img-boxcate {
                margin:auto; display:block; overflow:hidden; margin-bottom:8px
            }

            .box-cate aside h3 img {
                display:block; height:56px; margin:auto; width:auto; height:60px
            }

            .box-cate aside h3 span {
                display:block; overflow:hidden; text-align:center; padding:0 5px
            }

            .title-layout {
                font-weight:bold; font-size:22px; line-height:36px; color:#333; text-transform:uppercase; margin-bottom:15px
            }

            .discount-payonl {
                display:block; margin-bottom:30px
            }

            .discount-payonl .name-box {
                padding:0 0 15px
            }

            .discount-payonl .home-slider {
                margin:0
            }

            .discount-payonl .scroll-box {
                display:block; overflow-x:scroll; white-space:nowrap; padding:0 10px
            }

            .theme-xmas .discount-payonl .name-box:before {
                background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/icon-tree-desktop.png?v=1)
            }

            .theme-xmas .discount-payonl {
                position:relative
            }

            .theme-xmas .discount-payonl .name-box:before {
                content:''; background-size:100% 100%; width:48px; height:48px; position:absolute; left:0
            }

            .theme-xmas .discount-payonl .name-box {
                padding:0 0 15px 50px; display:flex; align-items:flex-end
            }

            .scroll-box a {
                display:inline-block; vertical-align:middle; margin:0 10px 0 0; border-radius:10px; overflow:hidden
            }

            .scroll-box a img {
                display:block; overflow:hidden; width:125px
            }

            .service-conv {
                display:block; overflow:hidden; background:#fff; border-radius:12px; margin-bottom:30px
            }

            .theme-xmas .service-conv {
                background:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/bg-dich-vu-tien-ich-desktop.png?v=1); background-size:100% 100%; position:relative
            }

            .theme-xmas .service-conv .name-box:before {
                content:''; background-size:100% 100%; width:48px; height:48px; position:absolute; left:0; top:5px
            }

            .theme-xmas .service-conv .name-box:before {
                background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/icon-snowman-desktop.png?v=1)
            }

            .theme-xmas .service-conv .name-box {
                padding:15px 15px 15px 50px
            }

            .theme-xmas .service-conv .name-box, .theme-xmas .service-conv .name-box a {
                color:#fff
            }

            .theme-xmas .service-conv .name-box a:after {
                border-top:2px solid #fff; border-right:2px solid #fff
            }

            .name-box a {
                float:right; text-transform:none; font-weight:500; color:#555; font-size:16px; text-transform:uppercase
            }

            .name-box a:after {
                content:''; border-top:1px solid #333; border-right:1px solid #333; width:6px; height:6px; display:inline-block; vertical-align:middle; margin:0 0 2px 5px; transform:rotate(45deg)
            }

            .service-conv ul {
                display:flex; flex-flow:row nowrap; padding:0 22px 30px
            }

            .service-conv ul li {
                float:left; width:283px; margin:0 12px 0 0; border-radius:14px; padding:14px 10px; background:#dceeff; cursor:pointer
            }

            .service-conv ul li:nth-child(2) {
                background:#fef5cf
            }

            .service-conv ul li:nth-child(3) {
                background:#ffefdb
            }

            .service-conv ul li:nth-child(4) {
                background:#e1fecf
            }

            .service-conv ul li:last-child {
                float:right; margin-right:0
            }

            .service-conv ul li a {
                display:block; overflow:hidden
            }

            .service-conv li .box-iconv {
                float:left; width:38px; margin-right:12px
            }

            .service-conv li .text-conv {
                display:block; overflow:hidden
            }

            .text-conv-title {
                display:block; overflow:hidden; font-size:18px; font-weight:500; color:#333; padding:6px 0 12px
            }

            .service-conv li .text-conv small {
                display:block; overflow:hidden; font-size:18px; line-height:25px; color:#333
            }

            .service-conv li .text-conv strong {
                color:#ff0b0b
            }

            .daily-sg {
                display:block; overflow:hidden; margin:0 0 10px; margin:0 0 30px
            }

            .theme-xmas .daily-sg .name-box:before {
                background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/icon-huu-desktop.png?v=1)
            }

            .theme-xmas .daily-sg {
                position:relative
            }

            .theme-xmas .daily-sg .name-box:before {
                content:''; background-size:100% 100%; width:48px; height:48px; position:absolute; left:0; top:0
            }

            .theme-xmas .daily-sg .name-box {
                padding:15px 15px 15px 50px
            }

            .daily-sg .name-box {
                padding:0 0 10px
            }

            .daily-sg .option-sg {
                display:flex; overflow:hidden; flex-flow:row; padding:0 0 15px; text-align:center; align-items:center
            }

            .option-sg a {
                display:inline-block; vertical-align:middle; width:285px; margin:0 20px 0 0; background:#fff; border-radius:8px; height:70px; padding:8px 0
            }

            .theme-xmas .option-sg a {
                background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/promote_manu.png?v=1); background-size:100%; height:83px; border-bottom-right-radius:12px; border-bottom-left-radius:12px
            }

            .option-sg a.active {
                background-color:#feb70b
            }

            .option-sg a:last-child {
                margin-right:0
            }

            .option-sg a img {
                display:inline-block; margin:auto; vertical-align:middle; width:50px; height:auto
            }

            .option-sg a span {
                display:inline-block; overflow:hidden; vertical-align:middle; color:#555; font-size:18px; line-height:22px; padding:8px 0 0
            }

            .option-sg a.active span {
                color:#222; font-weight:500
            }

            .theme-xmas .tech-new .name-box:before {
                background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/icon-santa-desktop.png?v=1)
            }

            .theme-xmas .tech-new {
                position:relative
            }

            .theme-xmas .tech-new .name-box:before {
                content:''; background-size:100% 100%; width:48px; height:48px; position:absolute; left:0; top:5px
            }

            .theme-xmas .tech-new .name-box {
                padding:15px 15px 15px 50px
            }

            .daily-sg .listproduct {
                grid-gap:16px; border:none
            }

            .daily-sg .listproduct li {
                border-radius:4px; border:none
            }

            .daily-sg .readmore-btn {
                border:none; margin:15px auto 0
            }

            .daily-sg .readmore-btn span::before {
                content:none
            }

            .trademark, .product-news {
                margin:0 0 30px; border-radius:12px
            }

            .trademark-slider, .product-news-slider {
                margin:0; width:100%
            }

            .theme-xmas .trademark .title-layout:before {
                background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/icon-huu-desktop.png?v=1)
            }

            .theme-xmas .trademark {
                position:relative
            }

            .theme-xmas .trademark .title-layout:before {
                content:''; background-size:100% 100%; width:48px; height:48px; position:absolute; left:0; top:0
            }

            .theme-xmas .trademark .title-layout {
                padding:15px 15px 15px 50px
            }

            .newchain {
                display:block; margin:0 0 30px
            }

            .theme-xmas .newchain .name-box:before {
                background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/icon-bell-desktop.png?v=1)
            }

            .theme-xmas .newchain {
                position:relative
            }

            .theme-xmas .newchain .name-box:before {
                content:''; background-size:100% 100%; width:48px; height:48px; position:absolute; left:0; top:0
            }

            .theme-xmas .newchain .name-box {
                padding:15px 15px 15px 50px
            }

            .newchain .name-box {
                padding:0 0 15px
            }

            .newchain .home-slider {
                margin:0
            }

            .newchain .banner-big {
                display:block; overflow:hidden; margin:10px
            }

            .newchain .banner-big img {
                display:block; width:100%
            }

            .newchain ul {
                display:block; overflow-x:scroll; white-space:nowrap; padding:0 0 10px 10px
            }

            .newchain ul li {
                display:inline-block; vertical-align:middle; width:150px; border-radius:4px; margin-right:5px
            }

            .newchain ul li a {
                display:block; overflow:hidden
            }

            .newchain ul li img {
                display:block; width:100%
            }

            .bg-ctv {
                display:block; overflow:hidden; max-width:285px
            }

            .bg-ctv img {
                display:block; width:100%
            }

            .home-slider .owl-nav button span::before, .trademark-slider .owl-nav button span::before {
                display:none
            }

            .home-slider .owl-carousel .owl-stage {
                align-items:center
            }

            .owl-carousel.listproduct, .another-slider .owl-carousel, .advise-slider.owl-carousel {
                border:none; display:flex; flex-wrap:nowrap
            }

            .owl-carousel.listproduct .owl-item {
                display:flex; border:0
            }

            .owl-carousel.listproduct .owl-item .item-img img {
                margin:0 auto; max-height:95%; object-fit:contain
            }

            .owl-carousel.listproduct>.item, .another-slider .owl-carousel>.item, .advise-slider.owl-carousel>.spl-item {
                display:none
            }

            .owl-carousel.listproduct>.item:nth-child(-n+5), .another-slider .owl-carousel>.item:nth-child(-n+3), .advise-slider.owl-carousel>.spl-item:nth-child(-n+3) {
                display:inline-block
            }

            .another-slider .owl-carousel>.item:nth-child(-n+3)>a>img.lazyload {
                height:200px; width:383px; display:block
            }

            .advise-slider.owl-carousel>.spl-item:nth-child(-n+3)>.spl-item__img>img.lazyload {
                height:93px; width:178px; display:block
            }

            .prd-promo .owl-carousel.listproduct>.item:nth-child(-n+5) {
                margin:0 5px; width:228px
            }

            .owl-carousel:not(.slider-banner) .owl-stage {
                display:flex; flex-wrap:wrap
            }

            .owl-carousel a img {
                width:100%; height:auto; border-radius:12px
            }

            .owl-nav button {
                background:rgba(255, 255, 255, .9) !important; height:60px; width:30px; position:absolute; top:50%; transform:translateY(-50%); z-index:2
            }

            .owl-nav button span {
                display:block; text-indent:-9999px
            }

            .owl-nav button span::before {
                content:""; border-top:3px solid #666; border-right:3px solid #666; content:''; height:22px; position:absolute; top:18px; width:22px
            }

            .owl-nav button.owl-prev span::before {
                left:10px; transform:rotate(-135deg)
            }

            .owl-nav button.owl-next span::before {
                transform:rotate(45deg); right:8px
            }

            .big-banner {
                text-align:center; margin:0 auto; width:100%; display:flex; align-items:center; justify-content:center; overflow:hidden
            }

            .big-banner a {
                width:1920px; min-width:1920px; display:block; overflow:hidden; margin:0 auto
            }

            .big-banner a img {
                width:100%; height:auto; position:relative; object-fit:cover; display:block; margin:0 auto
            }

            .home-slider.big-campaign {
                margin-top:-92px
            }

            .home-top.owl-carousel:not(.owl-loaded) {
                display:flex; justify-content:space-between
            }

            .home-top.owl-carousel:not(.owl-loaded) a {
                width:50%; margin-right:1%; min-width:47%; float:left
            }

            .home-top.owl-carousel>a:nth-child(n+3) {
                display:none
            }

            .home-top.owl-carousel>a:nth-child(2) {
                margin-right:0
            }

            .prd-promo .slider-promo.owl-carousel {
                padding-bottom:10px; overflow:hidden
            }

            .owl-carousel .owl-item img.lbliconimg.lbliconimg_44, .lbliconimg.lbliconimg_44 {
                top:35px
            }

            img.lazyload {
                opacity:0
            }

            .home-slider .owl-item a {
                display:block; overflow:hidden
            }

            .flashsale-block {
                position:relative; padding:20px; background:#ff685f; border-radius:12px; margin-bottom:30px
            }

            .theme-xmas .flashsale-block {
                background-image:url("//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/bg-flashsale-desktop.png?v=1")
            }

            .flashsale-block.shutdown {
                animation:shutdown 2s linear
            }

            .gvdshock {
                float:left; width:30%; margin-bottom:10px
            }

            .gvdshock h3 {
                font-weight:700; font-size:26px; line-height:1; text-transform:uppercase; color:#ffe818; margin-bottom:5px
            }

            i.lightning-ic {
                float:left; margin-right:10px
            }

            .endtime {
                color:#fff; margin-left:2px; display:inline-block
            }

            .listing-timeline {
                float:left; width:70%; text-align:center; display:flex; align-items:center; justify-content:center
            }

            .listing-timeline a {
                flex:1; color:#fff; line-height:1.5; font-size:16px; position:relative
            }

            .listing-timeline a * {
                display:block
            }

            .listing-timeline a span.timeline {
                font-size:20px
            }

            .listing-timeline a.active span:not(.timeline) {
                font-size:17px
            }

            .listing-timeline a.active span.timeline {
                font-weight:bold
            }

            .listing-timeline a.active::after {
                content:""; position:absolute; bottom:-6px; height:4px; border-radius:100px; width:40px; background:#fff; left:0; right:0; margin:0 auto
            }

            .countdown-timer {
                margin-left:15px
            }

            .countdown-timer label {
                padding:5px; margin:0 5px; color:#fff; background:#000; border-radius:8px; min-width:30px; display:inline-block; text-align:center; position:relative
            }

            .countdown-timer.calling label {
                color:#000
            }

            label#hour::after, label#minute::after {
                content:":"; position:absolute; right:-9px; font-size:18px; color:#fff; font-weight:bold
            }

            .slider-flashsale {
                width:100%; grid-template-columns:repeat(6, minmax(0, 1fr)); overflow:hidden; border:none
            }

            .slider-flashsale.has-slick {
                max-height:615px
            }

            .slider-flashsale.slick-initialized {
                max-height:unset; display:flex; overflow:visible
            }

            .slider-flashsale .item {
                margin:0 5px 10px; border:none; float:left; max-width:calc(100% - 10px); border-radius:5px; padding:0 5px 10px
            }

            .listproduct.slider-flashsale h3 {
                height:42px; text-align:center
            }

            .listproduct.slider-flashsale .price {
                text-align:center
            }

            .listproduct.slider-flashsale .price small {
                padding:3px; margin-left:0; vertical-align:text-top
            }

            .slider-flashsale .price-old {
                display:block; text-align:center; margin:0 auto 10px
            }

            .slick-arrow {
                position:absolute; top:0; bottom:0; margin:auto; height:60px; width:31px; padding:10px; border:none; left:-20px; background:rgba(255, 255, 255, .8); box-shadow:0 4px 4px rgba(0, 0, 0, .25); border-radius:4px 0 0 4px; z-index:1; cursor:pointer
            }

            .slick-arrow.prev-arrow {
                border-radius:0 4px 4px 0
            }

            .slick-arrow.next-arrow {
                right:-20px; left:unset
            }

            .slick-arrow::before {
                content:""; border-top:3px solid #666; border-right:3px solid #666; content:''; height:22px; position:absolute; top:18px; width:22px; z-index:1; left:10px; transform:rotate(-135deg)
            }

            .slick-arrow.next-arrow::before {
                transform:rotate(45deg); right:8px; left:unset
            }

            .stage-two {
                width:100%; height:100%; position:absolute; text-align:center; top:0; left:0; right:0; margin:auto; opacity:.5; background:#000; z-index:2; border-radius:12px; display:none
            }

            .stage-two .load {
                text-align:center; margin:10% auto; width:100px; height:100px
            }

            .fs-contain {
                position:relative; display:block; overflow:visible; margin:15px 0 0; min-height:20px
            }

            .fs-contain>img {
                position:absolute; left:0; top:-7px; width:21px; height:auto; z-index:1
            }

            .listproduct .remain_quantity .fs-contain .rq_count {
                position:relative; width:100%; display:block
            }

            .listproduct.slider-flashsale .remain_quantity {
                padding-bottom:5px
            }

            .listproduct.slider-flashsale h3 {
                height:40px
            }

            .slider-flashsale .item.sold-out .item-img .layer-sold-out {
                position:absolute; top:0; left:0; width:100%; height:100%; background-color:rgba(255, 255, 255, .3); z-index:1
            }

            .slider-flashsale .item.sold-out .item-img .layer-sold-out img {
                margin:0 auto; margin-top:50px
            }

            .slider-flashsale .item.sold-out a:hover .item-img .layer-sold-out img {
                margin-top:42px
            }

            .slider-flashsale .item.sold-out .price {
                color:#999
            }

            .slider-flashsale .item.sold-out .price small {
                color:#bdbdbd; background-color:#f1f1f1
            }

            .slider-flashsale .item.sold-out .remain_quantity .rq_count {
                padding-left:0; background-color:#f1f1f1
            }

            .theme-fs {
                background-repeat:no-repeat; background-size:100% 100%; padding:0 0 20px
            }

            .theme-fs.TGDD {
                background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/homev2/0812-theme/desk/background-tgdd.png)
            }

            .theme-fs.DMX {
                background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/homev2/0812-theme/desk/background-dmx.png)
            }

            .theme-fs .timeline-title {
                position:relative
            }

            .theme-fs .timeline-title img {
                display:block; border-radius:12px 12px 0 0
            }

            .theme-fs .timeline-title .listing-timeline {
                position:absolute; top:25px; width:45%
            }

            .theme-fs.TGDD .timeline-title .listing-timeline {
                right:120px
            }

            .theme-fs.DMX .timeline-title .listing-timeline {
                right:133px
            }

            .theme-fs .slider-flashsale {
                padding:0 20px; margin-top:20px
            }

            .theme-fs .slick-arrow.prev-arrow {
                left:0
            }

            .theme-fs .slick-arrow.next-arrow {
                right:0
            }

            .switch-version {
                position:fixed; bottom:30px; left:30px; z-index:1
            }

            .switch-version img {
                display:block; width:124px; height:auto
            }

            .cmt-home {
                display:block; overflow:hidden; position:relative; margin:0 0 20px 0
            }

            .cmt-home strong {
                font-size:13px; line-height:18px; display:block; overflow:hidden; color:#333; padding:0 10px 10px 10px
            }

            .cmt-home strong i {
                display:inline-block; vertical-align:middle; margin:0 2px 0 0
            }

            .cmt-home .slide-cmt.owl-carousel {
                display:flex
            }

            .cmt-home .slide-cmt.owl-carousel.padding-right .owl-stage {
                padding-left:0 !important
            }

            .cmt-home .slide-cmt.owl-carousel.padding-left .owl-stage {
                padding-right:0 !important
            }

            .cmt-home .slide-cmt .item {
                background:#fff; box-shadow:0 2px 8px rgba(0, 0, 0, .12); border-radius:4px; border:1px solid #e0e0e0; position:relative; min-width:346px; height:100px; display:flex
            }

            .cmt-home .slide-cmt .img-cmt {
                float:left; width:70px; margin:auto 15px
            }

            .cmt-home .slide-cmt .img-cmt img {
                display:block; width:100%
            }

            .cmt-home .slide-cmt .text-cmt {
                float:left; overflow:hidden; padding:10px 0 0; width:213px; margin:auto 0
            }

            .cmt-home .slide-cmt .text-cmt h3 {
                display:block; overflow:hidden; font-size:14px; line-height:18px; color:#222
            }

            .cmt-home .slide-cmt .text-cmt h3.text-ellipsis-1, .cmt-home .slide-cmt .text-cmt h3.text-ellipsis-2 {
                display:-webkit-box; -webkit-box-orient:vertical; overflow:hidden; text-overflow:ellipsis
            }

            .cmt-home .slide-cmt .text-cmt h3.text-ellipsis-1 {
                -webkit-line-clamp:1
            }

            .cmt-home .slide-cmt .text-cmt h3.text-ellipsis-2 {
                -webkit-line-clamp:2
            }

            .cmt-home .slide-cmt .text-cmt span {
                display:block; overflow:hidden; font-size:12px; line-height:16px; color:#666; padding:3px 0 0
            }

            .cmt-home .slide-cmt ul {
                display:block; overflow:hidden; width:211px; margin:12px 0 10px
            }

            .cmt-home .slide-cmt ul.flex {
                margin:auto 15px
            }

            .cmt-home .slide-cmt ul li {
                display:inline-block; vertical-align:middle; margin-right:15px; cursor:pointer
            }

            .cmt-home .slide-cmt ul li:last-child {
                margin-right:0
            }

            .cmt-home .slide-cmt .close-cmt {
                position:absolute; top:15px; right:20px; z-index:2; cursor:pointer
            }

            .cmt-home .slide-cmt .close-cmt:after, .cmt-home .slide-cmt .close-cmt:before {
                content:''; width:10px; height:1px; background:#222; transform:rotate(45deg); position:absolute
            }

            .cmt-home .slide-cmt .close-cmt:before {
                transform:rotate(-45deg)
            }

            .one-cmt:after {
                content:none
            }

            .one-cmt .box-cmt {
                background:#fff; box-shadow:0 2px 8px rgba(0, 0, 0, .12); border-radius:4px; border:1px solid #e0e0e0; position:relative; display:block; overflow:hidden; margin:0 10px
            }

            .one-cmt .box-cmt .img-cmt {
                float:left; width:70px; height:70px; margin:10px
            }

            .one-cmt .box-cmt .img-cmt img {
                display:block; width:100%
            }

            .one-cmt .box-cmt .text-cmt {
                float:left; overflow:hidden; padding:10px 0 0
            }

            .one-cmt .box-cmt .text-cmt h3 {
                display:block; overflow:hidden; font-size:12px; line-height:16px; color:#222
            }

            .one-cmt .box-cmt .text-cmt span {
                display:block; overflow:hidden; font-size:11px; line-height:14px; color:#666; padding:3px 0 0
            }

            .one-cmt .box-cmt ul {
                display:block; overflow:hidden; text-align:left; margin:16px 0 10px
            }

            .one-cmt .box-cmt ul li {
                display:inline-block; vertical-align:middle; margin:0 15px 0 0
            }

            .one-cmt .box-cmt .close-cmt {
                position:absolute; top:10px; right:15px
            }

            .one-cmt .box-cmt .close-cmt:after, .one-cmt .box-cmt .close-cmt:before {
                content:''; width:10px; height:1px; background:#222; transform:rotate(45deg); position:absolute
            }

            .one-cmt .box-cmt .close-cmt:before {
                transform:rotate(-45deg)
            }

            .cmt-home .slide-cmt>.item {
                display:none; margin-right:10px
            }

            .cmt-home .slide-cmt>.item:last-child {
                margin-right:0
            }

            .slick-arrow.slick-disabled {
                pointer-events:none; opacity:.5
            }

            .watched {
                margin-bottom:30px; background:#fff; border-radius:12px
            }

            .watched__label {
                display:flex
            }

            .watched__label p {
                font-weight:bold; font-size:22px; margin:15px 0 10px 15px; line-height:22px; text-transform:uppercase
            }

            .clean-watch {
                font-size:16px; line-height:22px; margin:15px 0 0 auto; padding-right:30px; cursor:pointer; height:100%
            }

            .clean-watch {
                position:relative
            }

            .clean-watch:hover {
                opacity:1
            }

            .clean-watch:before, .clean-watch:after {
                position:absolute; right:16px; content:' '; height:12px; width:1px; top:3px; background-color:#333
            }

            .clean-watch:before {
                transform:rotate(45deg)
            }

            .clean-watch:after {
                transform:rotate(-45deg)
            }

            .slider-watched.owl-carousel.listproduct .item {
                border-bottom-right-radius:12px; border-bottom-left-radius:12px
            }

            .slick-slider {
                position:relative; display:block; box-sizing:border-box; -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none; -webkit-touch-callout:none; -khtml-user-select:none; -ms-touch-action:pan-y; touch-action:pan-y; -webkit-tap-highlight-color:transparent
            }

            .slick-list {
                position:relative; display:block; overflow:hidden; margin:0; padding:0
            }

            .slick-list:focus {
                outline:none
            }

            .slick-list.dragging {
                cursor:pointer; cursor:hand
            }

            .slick-slider .slick-track, .slick-slider .slick-list {
                -webkit-transform:translate3d(0, 0, 0); -moz-transform:translate3d(0, 0, 0); -ms-transform:translate3d(0, 0, 0); -o-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)
            }

            .slick-track {
                position:relative; top:0; left:0; display:block; margin-left:auto; margin-right:auto
            }

            .slick-track:before, .slick-track:after {
                display:table; content:''
            }

            .slick-track:after {
                clear:both
            }

            .slick-loading .slick-track {
                visibility:hidden
            }

            .slick-slide {
                display:none; float:left; height:100%; min-height:1px
            }

            [dir='rtl'] .slick-slide {
                float:right
            }

            .slick-slide img {
                display:block
            }

            .slick-slide.slick-loading img {
                display:none
            }

            .slick-slide.dragging img {
                pointer-events:none
            }

            .slick-initialized .slick-slide {
                display:block
            }

            .slick-loading .slick-slide {
                visibility:hidden
            }

            .slick-vertical .slick-slide {
                display:block; height:auto; border:1px solid transparent
            }

            .slick-arrow.slick-hidden {
                display:none
            }

            @keyframes progress {
                0% {
                    stroke-dasharray:0 300
                }
            }

            [class^="icondetail-"], [class*="icondetail-"] {
                background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/TGDD/Mobile/icon_chitiet@2x-min.png?v=2); background-repeat:no-repeat; display:inline-block; height:30px; width:30px; line-height:30px; vertical-align:middle; background-size:300px 180px
            }

            .icondetail-noibat {
                background-position:0 0; height:28px; width:28px
            }

            .icondetail-video {
                background-position:-35px 0; height:30px; width:30px
            }

            .icondetail-360do {
                background-position:-70px 0; height:30px; width:30px
            }

            .icondetail-thongso {
                background-position:-105px 0; height:30px; width:30px
            }

            .icondetail-danhgia {
                background-position:-140px 0; height:19px; width:23px
            }

            .icondetail-star {
                background-position:-140px -40px; height:11px; width:12px
            }

            .icondetail-star-dark {
                background-position:-155px -40px; height:11px; width:12px
            }

            .icondetail-sosanh {
                background-position:-259px -19px; height:15px; width:15px
            }

            .icondetail-address {
                background-position:-190px 0; height:16px; width:16px
            }

            .icondetail-address-white {
                background-position:-144px -69px; height:16px; width:13px
            }

            .icondetail-store {
                background-position:-170px 0; height:15px; width:15px
            }

            .icondetail-tick {
                background-position:-275px -20px; height:14px; width:14px
            }

            .icondetail-question {
                background-position:-169px -39px; height:14px; width:14px
            }

            .icondetail-caidat {
                background-position:-35px -35px; height:32px; width:32px
            }

            .icondetail-doimoi {
                background-position:0 -35px; height:32px; width:32px
            }

            .icondetail-baohanh {
                background-position:-105px -35px; height:32px; width:32px
            }

            .icondetail-sachhd {
                background-position:-70px -35px; height:32px; width:32px
            }

            .icondetail-document {
                background-position:-210px 0; height:16px; width:16px
            }

            .icondetail-ratestar {
                background-position:-230px 0; height:15px; width:16px
            }

            .icondetail-haftstar {
                background-position:-249px 0; height:17px; width:18px
            }

            .icondetail-darkstar {
                background-position:-269px 0; height:17px; width:18px
            }

            .icondetail-blackstar {
                background-position:-290px 0; height:8px; width:8px
            }

            .icondetail-tickbuy {
                background-position:-170px -20px; height:13px; width:13px
            }

            .icondetail-heart {
                background-position:-190px -40px; height:12px; width:12px
            }

            .icondetail-like {
                background-position:-185px -20px; height:16px; width:16px
            }

            .icondetail-likewhite {
                background-position:-155px -135px; height:16px; width:16px
            }

            .icondetail-comment {
                background-position:-205px -20px; height:16px; width:16px
            }

            .icondetail-logoblue {
                background-position:-225px -20px; height:15px; width:15px
            }

            .icondetail-play {
                background-position:-209px -39px; height:11px; width:10px
            }

            .icondetail-videoop {
                background-position:-225px -40px; height:31px; width:43px
            }

            .icondetail-addss-detail {
                background-position:-220px -110px; height:30px; width:30px
            }

            .icondetail-xbtn {
                background-position:-270px -40px; height:12px; width:12px
            }

            .icondetail-closess {
                background-position:-150px -25px; height:10px; width:10px
            }

            .icondetail-book {
                background-position:-50px -70px; height:18px; width:19px
            }

            .icondetail-complete {
                background-position:-75px -70px; height:36px; width:36px
            }

            .icondetail-dots {
                background-position:-275px -60px; height:3px; width:16px
            }

            .icondetail-close-history {
                background-position:-120px -70px; height:16px; width:16px
            }

            .icondetail-search {
                background-position:-160px -70px; height:14px; width:14px
            }

            .icondetail-sltstar {
                background-position:-185px -75px; height:28px; width:29px
            }

            .icondetail-sltstar.active {
                background-position:-225px -75px; height:28px; width:29px
            }

            .icondetail-camera {
                background-position:-265px -75px; height:16px; width:20px
            }

            .icondetail-pin {
                background-position:0 -120px; height:32px; width:32px
            }

            .icondetail-hutchankhong {
                background-position:-40px -120px; height:32px; width:32px
            }

            .icondetail-giaohang {
                background-position:-80px -120px; height:32px; width:32px
            }

            .icondetail-other {
                background-position:-120px -120px; height:32px; width:32px
            }

            .icondetail-3circle {
                background-position:-295px -75px; height:16px; width:3px
            }

            .icondetail-playvideo {
                background-position:-190px -115px; height:25px; width:25px
            }

            .icondetail-window {
                background-position:-260px -115px; height:15px; width:15px
            }

            .icondetail-logoyl {
                background-position:-205px -55px; height:15px; width:15px
            }

            .breadcrumb {
                display:block; overflow:hidden; margin:0; background:#fff; line-height:32px; margin:10px 0
            }

            .breadcrumb span {
                display:inline-block; font-size:20px; color:#999; padding:2px 5px 0 0; line-height:1
            }

            .breadcrumb.heighter {
                margin-top:0; padding:10px 0
            }

            .breadcrumb li {
                display:inline-block; vertical-align:middle; overflow:hidden
            }

            .breadcrumb li:last-child::before {
                display:none
            }

            .breadcrumb li a {
                display:inline-block; white-space:nowrap; font-size:14px; color:#288ad6; padding:0 10px 0 0
            }

            .border {
                border-top:1px solid #e0e0e0; margin:20px 0
            }

            .owl-carousel {
                display:block
            }

            .owl-detail .slider-item {
                display:none
            }

            .owl-detail .slider-item img {
                max-width:100%
            }

            .owl-detail .slider-item:first-child {
                display:block
            }

            .box-scroll {
                overflow-x:auto; overflow-y:hidden; -ms-overflow-style:-ms-autohiding-scrollbar; -webkit-overflow-scrolling:touch; white-space:nowrap
            }

            .btn-closemenu {
                background-color:#fff; border:1px solid #e0e0e0; border-radius:4px; color:#333; cursor:pointer; float:right; line-height:21px; padding:7px; position:relative; text-align:right; width:67px
            }

            .btn-closemenu::before, .btn-closemenu::after {
                background-color:#333; content:''; left:13px; height:14px; position:absolute; top:10px; width:1px
            }

            .btn-closemenu::before {
                transform:rotate(45deg)
            }

            .btn-closemenu::after {
                transform:rotate(-45deg)
            }

            .bgback {
                background-color:rgba(0 0 0/.6); display:none; height:100%; left:0; position:fixed; top:0; width:100%; z-index:6
            }

            .bgback.showbg {
                display:block
            }

            .detail-title-top {
                border-bottom:1px solid #e0e0e0; padding:17px 10px; position:relative; text-align:center
            }

            .detail-title-top p {
                font-weight:bold; line-height:21px
            }

            .box2col__left {
                float:left; width:59.17%
            }

            .box2col__right {
                float:right; padding-left:30px; width:40.29%
            }

            .box2col {
                margin-bottom:25px
            }

            .detail-top {
                border-bottom:1px solid #e0e0e0; font-size:0; margin-bottom:20px; padding:10px 145px 15px 0; position:relative
            }

            .detail-top--allrating {
                border:none
            }

            .monopoly-img, .detail-label, .detail-rate, .txt-sosanh {
                display:inline-block; vertical-align:middle
            }

            .detail-top__right {
                float:left; margin-top:5px
            }

            h1 {
                font-size:22px; float:left; line-height:31px; margin-right:5px
            }

            .monopoly-img {
                line-height:0; margin-right:8px
            }

            .label {
                border-radius:2px; display:inline-block; font-size:12px; line-height:14px; margin-right:8px; padding:3px 7px; vertical-align:middle
            }

            .label--orange {
                background-color:#fff3ec; color:#fb6e2e
            }

            .label--red {
                background-color:#ffeded; color:#eb5757
            }

            .label--black {
                background-color:#f1f1f1; color:#333
            }

            .detail-rate i {
                margin-right:2px
            }

            .detail-rate p {
                display:inline-block; vertical-align:middle
            }

            .detail-rate-total {
                color:#2f80ed; font-size:13px; line-height:18px; margin:2px 0 0 3px
            }

            .txt-sosanh {
                cursor:pointer; color:#2f80ed; font-size:13px; line-height:16px; margin-left:10px
            }

            .txt-sosanh i {
                margin-top:-1px
            }

            .txt-sosanh i, .txt-sosanh span {
                display:inline-block; vertical-align:middle
            }

            .btn-society {
                position:absolute; top:14px; right:0
            }

            .btn-society .btn-like {
                background-color:#0f65d8; border-radius:4px; color:#fff; display:inline-block; font-size:12px; font-weight:500; height:22px; margin-right:2px; padding:2px 7px
            }

            .btn-society .btn-like span {
                font-size:10px; font-weight:normal
            }

            .btn-society .btn-share {
                background-color:#0f65d8; border-radius:4px; color:#fff; display:inline-block; font-size:12px; font-weight:500; height:22px; padding:2px 7px
            }

            .box01__tab {
                font-size:0; text-align:center
            }

            .box01__tab::-webkit-scrollbar {
                display:none
            }

            .box01__tab .item {
                cursor:pointer; display:inline-block; margin-right:10px; text-align:center; vertical-align:top; width:55px
            }

            .box01__tab .item img {
                max-width:100%
            }

            .box01__tab .item:last-child {
                margin-right:0
            }

            .box01__tab .item p {
                font-size:12px; line-height:1.3; margin-top:5px; white-space:normal
            }

            .box01__tab .item-border {
                align-items:center; border:1px solid #e0e0e0; border-radius:2px; display:flex; justify-content:center; min-height:55px; padding:4px
            }

            .box01__tab .item.active .item-border {
                border-color:#fb6e2e
            }

            .box01 .show-tab {
                display:none; position:relative
            }

            .box01__show {
                text-align:center
            }

            .box01 .show-tab.active {
                display:block
            }

            .total-imgslider {
                display:flex; justify-content:center; margin:10px 0 15px
            }

            .read-full {
                color:#2f80ed; display:inline-block; margin-right:10px
            }

            .policy {
                border:1px solid #e0e0e0; border-radius:4px; margin-top:35px; padding:0 20px
            }

            .policy__list {
                display:flex; flex-wrap:wrap; padding:10px 0
            }

            .policy__list li {
                border-bottom:1px solid #f1f1f1; padding:12px 0; position:relative; padding:12px 20px 12px 35px; width:50%
            }

            .policy__list li.bordernone {
                border:none
            }

            .policy__list li .iconl {
                left:0; position:absolute; top:8px; width:32px
            }

            .policy__list li p {
                line-height:20px; padding-left:10px
            }

            .policy__list li a {
                color:#2f80ed
            }

            .policy__list li em {
                font-style:normal; font-weight:bold
            }

            .product-old {
                margin-top:20px
            }

            .product-old a {
                color:#2f80ed
            }

            .product-old p {
                display:inline-block; vertical-align:middle
            }

            .product-old-price {
                color:#d0021c; font-weight:bold
            }

            .product-old-label {
                background-color:#e8e8e8; font-size:12px; margin-left:15px; padding:0 6px; position:relative
            }

            .product-old-label::before {
                border-top:9px solid transparent; border-bottom:9px solid transparent; border-right:9px solid #e8e8e8; content:''; left:-9px; position:absolute; top:0
            }

            .product-old-label span {
                color:#d0021c
            }

            .img-main img {
                width:100%
            }

            .show-box03 {
                font-size:13px; line-height:16px; margin-bottom:10px
            }

            .show-box03 strong {
                font-weight:bold
            }

            .box03__item {
                border:1px solid #e0e0e0; border-radius:2px; color:#333; display:inline-block; font-size:13px; line-height:16px; min-width:67px; margin-right:3px; padding:7px 5px; text-align:center
            }

            .box03__item.addradius {
                border-radius:16px
            }

            .box03__item.act {
                border-color:#2f80ed; background-color:#f2f7fc; color:#2f80ed
            }

            .scroll-click, .scroll-click-gift {
                position:relative
            }

            .scroll-click .box-scroll::-webkit-scrollbar, .scroll-click-gift .box-scroll::-webkit-scrollbar {
                display:none
            }

            .scroll-click .box-scroll, .scroll-click-gift .box-scroll {
                -ms-overflow-style:none; scrollbar-width:none
            }

            .nav-arrow {
                cursor:pointer; height:32px; position:absolute; top:0; text-align:center; width:32px
            }

            .nav-arrow::before {
                border-top:1px solid #000; border-right:1px solid #000; content:''; height:8px; position:absolute; top:10px; width:8px; z-index:1
            }

            .nav-arrow::after {
                content:''; height:32px; position:absolute; top:0; width:60px
            }

            .nav-gift {
                cursor:pointer; height:48px; position:absolute; top:5px; text-align:center; width:50px
            }

            .nav-gift::before {
                border-top:1px solid #000; border-right:1px solid #000; content:''; height:8px; position:absolute; top:19px; width:8px; z-index:1
            }

            .nav-gift::after {
                content:''; height:48px; position:absolute; top:0; width:50px
            }

            .nav-prev, .nav-prev-gift {
                left:0
            }

            .nav-prev::before, .nav-prev-gift::before {
                left:13px; transform:rotate(-135deg)
            }

            .nav-prev::after, .nav-prev-gift::after {
                background:linear-gradient(to left, rgba(255 255 255/.3), rgba(255 255 255/.8), #fff); left:0
            }

            .nav-next, .nav-next-gift {
                right:0
            }

            .nav-next::before, .nav-next-gift::before {
                right:13px; transform:rotate(45deg)
            }

            .nav-next::after, .nav-next-gift::after {
                background:linear-gradient(to right, rgba(255 255 255/.3), rgba(255 255 255/.8), #fff); right:0
            }

            .box04 {
                margin-top:15px
            }

            .box04__txt {
                line-height:16px
            }

            .box04__txt a {
                color:#2f80ed; position:relative
            }

            .box04__txt a::before {
                border-bottom:1px solid #2f80ed; border-right:1px solid #2f80ed; content:''; height:8px; position:absolute; transform:rotate(45deg); top:2px; right:-15px; width:8px
            }

            .price-one {
                margin-top:10px
            }

            .price-two {
                display:flex
            }

            .box-price-present, .box-price-old, .box-price-percent {
                display:inline-block
            }

            .box-price-txt {
                font-size:12px; line-height:14px
            }

            .box-price-present {
                color:#d0021c; font-size:18px; font-weight:bold; line-height:23px
            }

            .box-price-old {
                color:#666; margin-left:5px; text-decoration-line:line-through
            }

            .box-price-percent {
                color:#d0021c; margin:0 6px
            }

            .box-price-online {
                color:#dd1c1a; font-size:15px; font-weight:bold
            }

            .price-two .box-price {
                border-radius:8px 8px 0 0; background-color:#f1f1f1; cursor:pointer; padding:11px 10px; text-align:center; width:50%
            }

            .price-two .box-price-present {
                color:#333; display:block; font-size:16px
            }

            .price-two .box-price-old {
                font-size:12px
            }

            .price-two .box-price-percent {
                color:#333; font-size:12px
            }

            .box-price.active .box-price-present {
                color:#d0021c
            }

            .box-price.active .box-price-percent {
                color:#d0021c
            }

            .box-price.gray {
                border-bottom:1px solid #d0021c
            }

            .box-price.red {
                align-items:center; border-bottom:1px solid #4a90e2; justify-content:center
            }

            .box-price.gray.active {
                border-top:1px solid #4a90e2; border-left:1px solid #4a90e2; border-right:1px solid #4a90e2; border-bottom:none; background-color:#fff
            }

            .box-price.gray.active .box-price-present {
                color:#d0021c
            }

            .box-price.gray.active .box-price-percent {
                color:#d0021c
            }

            .box-price.gray.active .box-price-old {
                color:#333
            }

            .box-price.red.active {
                border-top:1px solid #d0021c; border-left:1px solid #d0021c; border-right:1px solid #d0021c; border-bottom:none; background-color:#fff
            }

            .box-price .label--black {
                padding:4px 8px
            }

            .giamsoc-ol {
                margin:15px 0; text-align:center
            }

            .giamsoc-ol__top {
                background:linear-gradient(to right, rgba(215 98 54/1), rgba(176 38 41/1)); border-radius:4px 4px 0 0; color:#fff; font-size:15px; font-weight:bold; padding:7px 5px
            }

            .giamsoc-ol__top span {
                color:#f4e853
            }

            .giamsoc-ol__bottom {
                background-color:#f1f1f1; border-radius:0 0 4px 4px; padding:8px 5px
            }

            .giamsoc-ol-price, .giamsoc-ol-time {
                display:inline-block; vertical-align:middle
            }

            .giamsoc-ol-price {
                color:#d0021c; font-size:18px; font-weight:bold; line-height:23px
            }

            .block__promo {
                border:1px solid #e0e0e0; border-radius:4px
            }

            .pr-top {
                background-color:#f6f6f6; border-bottom:1px solid #e0e0e0; border-radius:4px 4px 0 0; padding:8px 10px
            }

            .pr-txtb {
                font-weight:bold
            }

            .pr-txt {
                color:#666; font-size:12px; line-height:14px; margin-top:5px
            }

            .pr-content .pr-item {
                border-bottom:1px dashed #e0e0e0; padding:10px
            }

            .pr-content .pr-item:last-child {
                border:none
            }

            .divb {
                margin-bottom:10px
            }

            .divb:last-child {
                margin-bottom:0
            }

            .divb .nb {
                background-color:#4a90e2; border-radius:50%; color:#fff; display:inline-block; font-size:11px; float:left; height:16px; line-height:16px; margin-top:2px; text-align:center; width:16px
            }

            .divb-right {
                padding-left:26px
            }

            .divb-right p {
                line-height:20px
            }

            .divb-right a {
                color:#4a90e2
            }

            .divb-right .red {
                color:#d0021b
            }

            .pr-item .note {
                color:#bf081f
            }

            .divb-right .rd-more {
                color:#4a90e2; font-size:13px; display:inline-block; margin-top:5px; position:relative
            }

            .divb-right .rd-more::before {
                border-bottom:1px solid #4a90e2; border-right:1px solid #4a90e2; content:''; height:4px; position:absolute; top:5px; transform:rotate(45deg); right:-11px; width:4px
            }

            .divb .circle {
                margin-top:5px; padding-left:13px; position:relative
            }

            .divb .circle::before {
                background-color:#bebebe; border-radius:50%; content:''; height:5px; left:0; position:absolute; top:7px; width:5px
            }

            .radio-block {
                cursor:pointer; margin-top:8px
            }

            .radio-block span {
                border-radius:50%; border:1px solid #a6a6a6; height:18px; margin-right:5px; width:18px
            }

            .radio-block p, .radio-block span {
                display:inline-block; vertical-align:middle
            }

            .radio-block.act-check span {
                border:1px solid #fc9639; position:relative
            }

            .radio-block.act-check span::before {
                border-radius:50%; background-color:#fc9639; content:''; height:12px; left:2px; position:absolute; top:2px; width:12px
            }

            .pr-item .gift {
                display:flex; flex-wrap:wrap; margin-top:5px; width:850px
            }

            .pr-item .gift .title-lh {
                color:#333; display:inline-block; font-size:12px; line-height:16px; overflow:hidden; vertical-align:middle; width:calc(100% - 40px); white-space:normal
            }

            .pr-item .gift .title-lh p {
                display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:2; overflow:hidden; text-overflow:ellipsis
            }

            .pr-item .gift li {
                border:1px solid #e0e0e0; border-radius:2px; font-size:0; width:145px; margin-right:10px; padding:3px
            }

            .pr-item .gift img {
                max-width:40px; vertical-align:middle
            }

            .showpromo-radio {
                background-color:#ffeee1; border-radius:4px; color:#d0021c; font-size:12px; line-height:14px; margin-top:5px; padding:7px 10px
            }

            .check-product {
                font-weight:bold; margin-top:15px
            }

            .check-product--conhang {
                color:#219653
            }

            .check-product--chuyenve {
                color:#f2994a
            }

            .check-product .banonline {
                border-left:1px solid #e0e0e0; color:#f2994a; margin-left:3px; padding-left:5px
            }

            .check-product--khongkd {
                color:#d0011b
            }

            .deliver {
                margin-top:10px
            }

            .deliver p {
                line-height:17px; padding-left:20px
            }

            .deliver a {
                color:#2f80ed; text-decoration:underline
            }

            .deliver a.underline {
                text-decoration:none
            }

            .deliver i {
                float:left
            }

            .deliver .time {
                color:#219653; line-height:20px; margin-top:8px
            }

            .deliver .canpay {
                color:#fb6e2e; margin-top:5px
            }

            .store {
                color:#2f80ed; display:inline-block; margin-top:10px
            }

            .store i {
                float:left; margin-right:5px
            }

            .block-button {
                display:flex; flex-wrap:wrap; margin-top:15px
            }

            .btn-buynow {
                background-color:#fb6e2e; border-radius:4px; color:#fff; display:block; font-size:15px; padding:14px 10px; text-align:center
            }

            .btn-buynow.red {
                background-color:#d0021c; font-weight:bold; padding:6px 10px
            }

            .btn-buynow span {
                display:block; font-size:12px; font-weight:normal
            }

            .btn-ins {
                background-color:#2f80ed; border-radius:4px; color:#fff; display:block; font-size:13px; line-height:16px; padding:7px 5px; text-align:center
            }

            .btn-ins span {
                display:block; font-size:12px; line-height:14px; margin-top:2px
            }

            .block-button .btn-buynow {
                margin-bottom:8px; width:100%
            }

            .block-button .btn-ins {
                margin-right:2%; width:49%
            }

            .block-button .btn-ins:last-child {
                margin-right:0
            }

            .callorder {
                line-height:17px; padding:15px 0; text-align:center
            }

            .callorder a {
                color:#2f80ed
            }

            .promoadd {
                border:1px solid #e0e0e0; border-radius:4px; padding-bottom:10px
            }

            .promoadd__ttl {
                background-color:#f6f6f6; border-bottom:1px solid #e0e0e0; border-radius:4px 4px 0 0; font-size:13px; line-height:16px; padding:12px
            }

            .promoadd__ttl em {
                font-weight:bold; font-style:normal; font-size:14px; line-height:17px
            }

            .promoadd__list {
                padding:10px 20px 10px 10px
            }

            .promoadd__list li {
                align-items:center; display:flex; margin-bottom:20px
            }

            .promoadd__list li:last-child {
                margin-bottom:0
            }

            .promoadd__list li img {
                max-width:45px
            }

            .promoadd__list li i {
                left:0; position:absolute; top:3px
            }

            .promoadd__list li p {
                padding:0 16px 0 25px; position:relative; width:calc(100% - 55px)
            }

            .promoadd__list li p span {
                color:#d0021c
            }

            .promoadd__list li p a {
                color:#2f80ed; display:inline-block; margin-top:5px
            }

            .promoadd-more {
                color:#2f80ed; margin-left:10px; position:relative
            }

            .promoadd-more::before {
                border-bottom:1px solid #4a90e2; border-right:1px solid #4a90e2; content:''; height:5px; position:absolute; top:5px; transform:rotate(45deg); right:-11px; width:5px
            }

            .btn-detail {
                border:1px solid #2f80ed; border-radius:5px; color:#2f80ed; display:block; margin:0 auto; max-width:340px; padding:10px 5px; text-align:center
            }

            .btn-detail span {
                position:relative
            }

            .btn-detail span::before {
                border-bottom:5px solid transparent; border-top:5px solid transparent; border-left:5px solid #2f80ed; content:''; position:absolute; top:3px; right:-15px
            }

            .scrolling_inner {
                position:relative
            }

            .scrolling_inner.scroll-left::before {
                background:linear-gradient(to left, rgba(255 255 255/0), rgba(255 255 255/1)); content:''; left:0; height:100%; position:absolute; top:0; width:40px; z-index:1
            }

            .scrolling_inner.scroll-right::after {
                background:linear-gradient(to right, rgba(255 255 255/0), rgba(255 255 255/1)); content:''; height:100%; position:absolute; top:0; right:0; width:40px
            }

            .block-tab {
                background-color:#000; height:100%; display:none; left:0; margin:0 auto; overflow-y:scroll; position:fixed; padding-top:65px; top:0; transition:.5s; right:0; width:100%; z-index:10
            }

            .block-tab::-webkit-scrollbar {
                width:10px; background-color:#f5f5f5
            }

            .block-tab::-webkit-scrollbar-thumb {
                border-radius:10px; background-color:#4d90e0
            }

            .block-tab.show {
                display:block
            }

            .block-tab-top {
                background-color:#000; display:flex; justify-content:center; left:0; padding-top:20px; position:fixed; top:0; width:100%; z-index:10
            }

            .block-tab .tab-item {
                color:#fff; cursor:pointer; font-size:16px; line-height:19px; margin:0 6px; padding:10px 12px
            }

            .block-tab .tab-item.active {
                border-bottom:4px solid #2d9cdb; color:#2d9cdb; font-weight:bold
            }

            .block-tab .divshow {
                max-width:1020px; margin:0 auto; width:100%
            }

            .block-tab .divclick {
                position:relative
            }

            .block-tab .playvideo {
                left:50%; position:absolute; top:50%; transform:translate(-50%, -50%)
            }

            .slider-tab.owl-carousel {
                margin-top:30px
            }

            .slider-click.owl-carousel {
                margin-top:50px
            }

            .slider-click.owl-carousel .owl-wrapper {
                display:flex !important; justify-content:center; text-align:center; width:100% !important
            }

            .slider-click.owl-carousel .owl-item {
                line-height:0; max-width:100px; margin:0 3px
            }

            .slider-click.owl-carousel .owl-item.synced {
                border:3px solid #2d9cdb
            }

            .slider-tab.owl-carousel .owl-buttons div {
                background:transparent !important
            }

            .slider-tab.owl-carousel .owl-buttons .owl-prev {
                left:30px
            }

            .slider-tab.owl-carousel .owl-buttons .owl-next {
                right:30px
            }

            .slider-buy {
                background-color:#fff; margin-top:10px; padding:8px 20px 8px 15px
            }

            .slider-buy .buy-img {
                width:154px
            }

            .slider-buy .buy-content {
                padding:0 15px; width:calc(100% - 154px)
            }

            .slider-buy .buy-content h3 {
                line-height:20px
            }

            .slider-buy .buy-content .price {
                color:#d0021c; font-size:16px; font-weight:bold; line-height:21px; margin:5px 0
            }

            .slider-buy .buy-content .price-old {
                color:#666; display:inline-block; font-size:13px; line-height:17px; text-decoration-line:line-through
            }

            .slider-buy .buy-content .percent {
                color:#d0021c; display:inline-block; font-size:13px; line-height:17px
            }

            .slider-buy-item {
                align-items:center; display:flex; float:left; width:calc(100% - 416px)
            }

            .slider-buy-btn {
                display:flex; float:left; margin-top:10px; width:416px
            }

            .slider-buy-btn .btn-buynow, .slider-buy-btn .btn-ins {
                align-items:center; display:flex; justify-content:center; margin-left:8px; width:200px
            }

            .close-tab {
                position:fixed; top:25px; right:20px; z-index:10
            }

            .block-tab .content-t {
                display:none
            }

            .block-tab .content-t.active {
                display:block
            }

            .block-tab img {
                max-width:100%
            }

            .content-t__list li {
                margin-bottom:10px
            }

            .content-t .li-video {
                position:relative
            }

            .content-t .iconvideo {
                left:50%; position:absolute; top:50%; transform:translate(-50%, -50%)
            }

            .content-t-wrap {
                max-width:700px; margin:0 auto
            }

            .review-post {
                background-color:#fff; padding:20px
            }

            .review-post a {
                color:#2f80ed
            }

            .review-post h3 {
                font-size:18px; line-height:22px; margin-bottom:10px
            }

            .review-post h3 a {
                font-size:18px
            }

            .review-post p {
                margin-bottom:10px
            }

            .buyol {
                background-color:rgba(208 2 28/.05); border-radius:4px; margin-bottom:15px; padding:15px 10px 5px
            }

            .buyol__ttl {
                margin:5px 0
            }

            .buyol__list li {
                list-style:none; line-height:20px; margin-bottom:5px; position:relative; padding-left:15px
            }

            .buyol__list li::before {
                background-color:#999; border-radius:50%; content:''; height:6px; left:0; position:absolute; top:6px; width:6px
            }

            .buyol__list li a {
                color:#4a90e2
            }

            .buyol__price .t01 {
                color:#d0021c; font-weight:bold
            }

            .buyol__price .t02 {
                text-decoration-line:line-through
            }

            .block-price2 {
                display:none; padding:10px 15px
            }

            .block-price2.active {
                border-radius:0 0 8px 8px; display:block
            }

            .block-price2.blue.active {
                border:1px solid #4a90e2; border-top:none
            }

            .block-price2.red.active {
                border:1px solid #d0021c; border-top:none
            }

            .box-reserve {
                background:linear-gradient(to right, rgba(52 126 255/1), rgba(34 71 202/1)); margin-bottom:15px; padding:10px
            }

            .box-reserve__main p {
                color:#fff; line-height:20px
            }

            .box-reserve__main p span {
                font-weight:bold; font-size:18px; line-height:25px
            }

            .box-reserve i {
                float:left
            }

            .box-reserve__main {
                padding-left:35px
            }

            .txt-fees {
                margin-top:5px
            }

            .txt-fees span {
                color:#d0021c
            }

            .txt-fees i {
                float:none
            }

            .parameter {
                padding:15px 0
            }

            .parameter__title {
                font-size:18px; font-weight:bold; line-height:20px; margin-bottom:25px
            }

            .parameter__list li {
                align-items:flex-start; display:flex; padding:10px
            }

            .parameter__list li:nth-child(odd) {
                background-color:#f5f5f5
            }

            .parameter__list li:nth-child(even) {
                background-color:#fff
            }

            .parameter__list .lileft {
                width:140px
            }

            .parameter__list .liright {
                padding-left:50px; padding-right:15px; width:calc(100% - 140px)
            }

            .parameter__link {
                color:#2f80ed; display:inline-block; margin:20px 0
            }

            .parameter__link i {
                margin:-5px 5px 0 0
            }

            .slider-parameter .img {
                line-height:0; max-width:700px; margin:0 auto
            }

            .parameter-all {
                background-color:#fff
            }

            .parameter-ttl {
                background-color:#f1f1f1; font-size:16px; font-weight:bold; padding:10px
            }

            .parameter-all .ulist li {
                border-bottom:1px solid #f1f1f1; display:flex; padding:10px
            }

            .parameter-all .ulist li:last-child {
                border-bottom:none
            }

            .parameter-all .ctLeft {
                font-weight:bold; line-height:21px; width:30%
            }

            .parameter-all .ctLeft a {
                color:#4a90e2
            }

            .parameter-all .ctRight {
                line-height:21px; padding-left:10px; width:70%
            }

            .parameter-all .ctRight a {
                color:#4a90e2
            }

            .parameter-all .ctRight .circle {
                position:relative; padding-left:8px
            }

            .parameter-all .ctRight .circle::before {
                border-radius:50%; background-color:#b7b7b7; content:''; height:4px; left:0; position:absolute; top:8px; width:4px
            }

            .article {
                margin-top:130px; position:relative
            }

            .article__title {
                font-size:18px; font-weight:bold; margin-bottom:30px
            }

            .article__content {
                height:450px; overflow:hidden; transition:.3s
            }

            .article__content.showall {
                height:auto
            }

            .article__content h3 {
                font-size:20px; font-weight:bold; line-height:28px; margin-bottom:15px
            }

            .article__content h3 a {
                font-weight:bold; font-size:20px
            }

            .article__content p {
                line-height:20px; margin-bottom:10px
            }

            .article__content a {
                color:#2f80ed
            }

            .article__content img {
                max-width:100%
            }

            .bg-article {
                background:linear-gradient(to bottom, rgba(255 255 255/0), rgba(255 255 255/62.5), rgba(255 255 255/1)); bottom:15px; height:105px; left:0; position:absolute; width:100%
            }

            .article .btn-detail {
                position:relative
            }

            .content-wrap {
                padding:0 20px; width:840px
            }

            .rRepPopup {
                background-color:#fff; height:320px; left:0; max-width:640px; position:fixed; top:0; transition:.3s; right:0; width:100%; z-index:13; bottom:0; margin:auto
            }

            .rRepPopup.blockshow {
                right:0
            }

            .rRepPopup__top {
                border-bottom:1px solid #e0e0e0; padding:15px 85px 15px 10px
            }

            .rRepPopup__title {
                font-weight:bold; line-height:20px
            }

            .rRepPopup-close {
                top:10px; right:10px
            }

            .rRepPopup .rCfmInfo {
                display:block; overflow:hidden; background:#fff; padding:10px
            }

            .rRepPopup .rCfmInfo .cgd {
                margin:10px 0
            }

            .rRepPopup .rCfmInfo .cgd .c_female {
                margin-left:10px
            }

            .rRepPopup .rCfmInfo span {
                cursor:pointer
            }

            .rRepPopup .rCfmInfo input {
                display:block; padding:8px; width:100%; margin:0 auto 10px; height:40px; border:1px solid #dadada; background:#fff; border-radius:4px; font-size:14px; box-sizing:border-box
            }

            .rRepPopup .rCfmInfo button {
                display:block; width:100%; margin:0 auto 10px; padding:8px; height:40px; font-size:14px; color:#fff; text-transform:uppercase; border:1px solid #4a90e2; border-radius:4px; background-color:#4a90e2
            }

            .rRepPopup .rCfmInfo a {
                color:#4a90e2; margin:5px 0 12px; display:inline-block
            }

            .rRepPopup .rCfmInfo .lbMsgPopCmt {
                display:block; color:#d0021b; margin:5px 0
            }

            .c-btnclose {
                background-color:#fff; border:1px solid #e0e0e0; border-radius:4px; line-height:21px; padding:4px 7px; position:absolute; text-align:right; width:66px; cursor:pointer
            }

            .c-btnclose::before, .c-btnclose::after {
                background-color:#333; content:''; left:14px; height:10px; position:absolute; top:9px; width:1px
            }

            .c-btnclose::before {
                transform:rotate(45deg)
            }

            .c-btnclose::after {
                transform:rotate(-45deg)
            }

            .icondetail-radcheck {
                background-position:-150px -95px; width:18px; height:18px
            }

            .icondetail-rad {
                background-position:-120px -95px; width:18px; height:18px
            }

            .fleft {
                float:left; padding-top:16px
            }

            .fright {
                float:right
            }

            .box-border {
                border:1px solid #e0e0e0; border-radius:8px; margin-top:40px; padding:15px 15px 20px
            }

            .frames-detail {
                border:1px solid #e0e0e0; display:flex; margin-bottom:40px; padding:25px
            }

            .rating__title {
                font-weight:bold; font-size:18px; line-height:20px
            }

            .rating-star {
                align-items:flex-start; display:flex; margin:25px 0 25px
            }

            .rating-star .point {
                color:#fe8c23; font-weight:bold; font-size:22px; line-height:27px; margin-top:2px
            }

            .rating-left {
                border-right:1px solid #f1f1f1; position:relative; padding:0 20px 10px 10px; text-align:center; width:38.2%
            }

            .rating-top {
                align-items:center; display:flex; margin-bottom:15px; margin-top:-10px
            }

            .rating-total {
                color:#333; font-size:14px; line-height:17px; margin-top:4px
            }

            .list-star {
                margin:0 8px
            }

            .rating-list li {
                align-items:center; display:flex; margin-bottom:7px
            }

            .rating-list li:last-child {
                margin-bottom:0
            }

            .rating-list .number-star {
                font-size:12px; line-height:14px; text-align:left; width:25px
            }

            .rating-list .number-star i {
                margin-top:-4px
            }

            .rating-list .number-percent {
                color:#2f80ed; font-size:12px; font-weight:bold; line-height:15px; padding-left:10px; text-align:left; width:35px; cursor:pointer
            }

            .rating-list .number-percent.dsp {
                color:#666
            }

            .rating-list .timeline-star {
                background-color:#eee; height:4px; position:relative; width:calc(100% - 60px)
            }

            .rating-list .timing {
                background-color:#fe8c23; left:0; height:4px; position:absolute; top:0
            }

            .rating-list .timing67 {
                width:67%
            }

            .rating-list .timing23 {
                width:23%
            }

            .rating-list .timing7 {
                width:7%
            }

            .rating-list .timing1 {
                width:1%
            }

            .rating-list .timing2 {
                width:2%
            }

            .rating-img-list {
                display:flex; position:relative
            }

            .rating-img-list li {
                cursor:pointer; line-height:0; max-width:53px; margin-right:5px
            }

            .rating-img-list li:first-child {
                margin-left:0
            }

            .rating-img-list li:last-child {
                position:relative
            }

            .rating-img-list img {
                max-width:100%; min-width:125px; height:125px; border-radius:5px; object-fit:cover
            }

            .rating-img-ttl {
                font-size:16px; font-weight:bold; line-height:22px; margin-bottom:20px
            }

            .rating-img-rd {
                align-items:center; background-color:rgba(0 0 0/.76); color:#fff; display:flex; font-size:12px; justify-content:center; height:100%; line-height:16px; left:0; position:absolute; text-align:center; top:0; width:100%; border-radius:5px; padding:0 5px
            }

            .rating-circle {
                padding:0 18px; width:61.8%
            }

            .rating-circle-ttl {
                line-height:17px; margin-bottom:15px
            }

            .rating-circle-ttl em {
                font-style:normal; font-weight:bold
            }

            .rating-circle-card {
                border-radius:4px; display:flex; justify-content:center; overflow:hidden; position:relative; text-align:center; transition:.3s
            }

            .rating-circle-card .item-cart {
                position:relative; width:20%
            }

            .rating-circle-card svg {
                height:50px; position:relative; transform:rotate(-87deg); width:50px; z-index:1
            }

            .rating-circle-card circle {
                fill:none; height:100%; transform:translate(5px, 5px); stroke:#eee; stroke-width:5; z-index:1; width:100%
            }

            .rating-circle-card svg circle:nth-child(2) {
                animation:progress 2s ease-out forwards; -webkit-animation:progress 2s ease-out forwards; stroke-dasharray:125; stroke-dashoffset:125
            }

            .rating-circle-card .number {
                border-radius:50%; font-size:12px; line-height:14px; left:1px; position:absolute; top:18px; width:100%
            }

            .rating-circle-card .txt {
                font-size:12px; line-height:14px
            }

            .rating-search {
                margin-top:15px; position:relative; width:260px
            }

            .rating-search i {
                position:absolute; top:7px; left:10px
            }

            .rating-search input {
                border:1px solid #ddd; border-radius:5px; color:#666; height:32px; padding:8px 10px 8px 35px; width:100%
            }

            .rating-viewall {
                border-left:1px solid #e0e0e0; border-right:1px solid #e0e0e0; display:block; margin:0; width:30%
            }

            .rating-viewall .rating-left {
                align-items:center; border:none; display:flex; justify-content:center; margin:0 auto; width:60%
            }

            .rating-viewall .rating-left .point {
                margin-right:15px
            }

            .rating-viewall .rating-left::before {
                display:none
            }

            .rating-viewall .rating-right {
                margin:0 auto; padding:0; width:55%
            }

            .rating-viewall .rating-circle {
                width:39.5%
            }

            .rating-circle-viewall {
                padding-left:30px; width:41.67%
            }

            .rating-circle-viewall .item-cart {
                margin:0 6px; padding:0; width:80px
            }

            .rating-circle-viewall .rating-circle-card {
                justify-content:flex-start
            }

            .frames-detail .comment-btn__item {
                margin:15px auto 0; padding:8px 5px
            }

            .rating-img-viewall .rating-img-list li {
                max-width:125px; margin-right:10px
            }

            .ratingLst .reply {
                margin-top:12px; width:100%
            }

            .ratingLst .reply input {
                border:1px solid #ddd; border-radius:4px; -webkit-border-radius:4px; -moz-border-radius:4px; font-size:14px; color:#999; padding:5px; width:75%
            }

            .ratingLst .reply .rrSend {
                padding:6px 10px; border:1px solid #288ad6; background:#fff; font-size:13px; color:#288ad6; -moz-border-radius:4px; -webkit-border-radius:4px; border-radius:4px
            }

            .ratingLst .ifrl {
                margin:10px 0 0; color:#ccc; width:100%
            }

            .ratingLst .ifrl span {
                color:#333
            }

            .ratingLst .ifrl a {
                color:#288ad6
            }

            .filter-choose {
                align-items:center; display:flex; margin:15px 0
            }

            .check-filterstar {
                background-color:#fff; border:1px solid #999; border-radius:16px; color:#333; display:inline-block; font-size:14px; line-height:14px; margin-right:10px; padding:8px 9px
            }

            .check-filterstar.active {
                border:1px solid #2f80ed; color:#2f80ed
            }

            .filter-choose-ttl {
                font-size:13px; font-weight:bold; margin-right:10px
            }

            .filter-choose label {
                line-height:20px; margin-left:2px
            }

            .filter-choose input {
                border:1px solid #a6a6a6; border-radius:3px; height:16px; width:16px
            }

            .filter-choose label, .filter-choose input {
                display:inline-block; vertical-align:middle
            }

            .filter-choose .checkitem, .filter-choose-ttl {
                display:inline-block; vertical-align:middle
            }

            .filter-choose .checkitem {
                margin-right:15px
            }

            .filter-choose .checkitem:last-child {
                margin-right:0
            }

            .rating-amount {
                padding-top:25px
            }

            .boxsort {
                padding:12px 10px 15px
            }

            .boxsort__ttl {
                font-size:13px; font-weight:bold; line-height:20px
            }

            .boxsort p, .boxsort__click {
                display:inline-block; vertical-align:middle
            }

            .boxsort__click {
                cursor:pointer; margin-left:10px; position:relative
            }

            .boxsort__list {
                background-color:#fff; box-shadow:0 4px 24px rgba(0, 0, 0, .12); border-radius:5px; display:none; left:0; position:absolute; padding:5px 0; top:33px; width:100%; z-index:1
            }

            .boxsort__click-show {
                border:1px solid #ddd; border-radius:5px; line-height:20px; padding:5px 20px 5px 8px; position:relative
            }

            .boxsort__click-show::before {
                border-left:4px solid transparent; border-right:4px solid transparent; border-top:4px solid #333; content:''; position:absolute; top:14px; transition:.2s; right:8px
            }

            .boxsort__click-show.active::before {
                transform:rotate(180deg)
            }

            .boxsort__list li {
                padding:10px 10px; border-bottom:1px solid #f1f1f1
            }

            .boxsort__list li:last-child {
                border-bottom:none
            }

            .boxsort__list li.active i {
                box-sizing:border-box; position:relative; display:inline-block; transform:scale(var(--ggs, 1)); width:22px; height:16px; border:2px solid transparent; border-radius:100px; vertical-align:middle
            }

            .boxsort__list li.active i::after {
                content:""; display:block; box-sizing:border-box; position:absolute; left:3px; top:-4px; width:6px; height:10px; border-width:0 2px 2px 0; border-style:solid; transform-origin:bottom left; transform:rotate(45deg)
            }

            .box-pdt {
                width:28.33%
            }

            .box-pdt__img {
                text-align:center
            }

            .box-pdt__img img {
                max-width:155px
            }

            .box-pdt__content {
                line-height:1.4em
            }

            .box-pdt__content h3 {
                line-height:20px; margin-bottom:5px
            }

            .box-pdt-price {
                color:#d0021c; display:block; font-size:16px; font-weight:bold; line-height:21px; margin-bottom:5px
            }

            .box-pdt-old {
                display:inline-block; font-size:13px; line-height:17px; text-decoration-line:line-through; vertical-align:middle
            }

            .box-pdt-percent {
                color:#d0021c; display:inline-block; font-size:13px; line-height:17px; vertical-align:middle
            }

            .comment {
                margin-top:20px
            }

            .comment__item {
                border-top:1px solid #f1f1f1; padding:15px 0 25px; position:relative
            }

            .click-3circle {
                position:absolute; top:20px; right:0
            }

            .comment__item .txtname, .comment__item .tickbuy {
                display:inline-block; vertical-align:middle
            }

            .comment__item .txtname {
                font-weight:bold; margin-right:8px; text-transform:capitalize
            }

            .comment__item .tickbuy {
                color:#2ba832; font-size:12px; line-height:14px
            }

            .comment__item .item-rate {
                margin-top:5px
            }

            .comment-star, .intro-future {
                display:inline-block; vertical-align:middle
            }

            .intro-future {
                font-size:13px; margin-left:15px; padding-top:5px
            }

            .intro-future i {
                margin:-1px 2px 0 0
            }

            .comment-content {
                margin-top:10px
            }

            .comment-content .cmt-txt {
                font-size:14px; line-height:20px
            }

            .comment-content .cmt-img {
                cursor:pointer; display:inline-block; margin-right:8px; margin-top:10px; vertical-align:top
            }

            .comment-content .cmt-img img {
                width:125px; height:125px; object-fit:cover; border-radius:5px
            }

            .comment-content.noimg .cmt-txt {
                padding-right:0; width:100%
            }

            .comment__item .qtv {
                background:#f1c40f; color:#333; font-size:11px; padding:3px; margin-left:10px
            }

            .comment__item .item-click {
                display:flex; flex-wrap:wrap; margin-top:10px
            }

            .comment__item .click-like, .comment__item .click-cmt {
                color:#2f80ed; font-size:13px; margin-right:20px
            }

            .comment__item .click-use {
                color:#999; font-size:12px; padding-left:15px; position:relative
            }

            .comment__item .click-use::before {
                background-color:#e0e0e0; content:''; height:12px; left:0; position:absolute; top:3px; width:1px
            }

            .comment__item .click-use.act .info-buying {
                display:block
            }

            .comment__item .click-use:hover .info-buying {
                display:block
            }

            .comment__item .click-use.act .info-buying {
                display:none
            }

            .comment__item .click-use.act:hover .info-buying {
                display:none
            }

            .info-buying {
                background-color:#ebebeb; bottom:30px; box-shadow:0 2px 4px rgba(0, 0, 0, .12); border-radius:4px; color:#333; display:none; padding:20px 15px 15px; position:absolute; transition:.3s; right:-20px; width:290px
            }

            .info-buying::before {
                border-style:solid; bottom:-22px; border-color:#ebebeb transparent transparent transparent; border-width:12px; content:''; position:absolute; right:15px
            }

            .info-buying-txt {
                display:flex; justify-content:center
            }

            .info-buying .txtitem {
                text-align:center
            }

            .info-buying .txtitem:first-child {
                margin-right:80px
            }

            .txtitem .txt01, .txtitem .txtdate {
                font-size:12px; line-height:16px
            }

            .txtitem .txt01 {
                color:#666
            }

            .txtitem .txtdate {
                font-weight:bold
            }

            .info-buying .timeline-txt {
                font-size:12px; line-height:16px; margin-top:10px; text-align:center
            }

            .info-buying .timeline-txt span {
                font-weight:bold
            }

            .length-using {
                background-color:#c4c4c4; height:1px; margin:10px auto 0; position:relative; width:190px
            }

            .length-percent {
                background-color:#999; height:3px; position:relative; top:-1px
            }

            .length-using::before {
                border-top:1px solid #c4c4c4; border-right:1px solid #c4c4c4; content:''; height:6px; position:absolute; transform:rotate(45deg); top:-3px; right:0; width:6px
            }

            .length-percent::before, .length-percent::after {
                background-color:#53b859; border-radius:50%; content:''; height:8px; position:absolute; top:-3px; width:8px
            }

            .length-percent::before {
                left:0
            }

            .length-percent::after {
                right:0
            }

            .info-buying-list {
                margin-top:15px
            }

            .info-buying-list li {
                color:#666; font-size:12px; line-height:17px; margin-bottom:5px
            }

            .info-buying-list li span {
                background-color:#666; border-radius:50%; display:inline-block; height:4px; margin:6px 6px 0 0; vertical-align:top; width:4px
            }

            .info-buying-close {
                background-color:#333; border:2px solid #fff; border-radius:50%; box-shadow:0 2px 4px rgba(0, 0, 0, .12); height:25px; position:absolute; top:-10px; right:-10px; width:25px
            }

            .info-buying-close::before, .info-buying-close:after {
                background-color:#fff; content:''; height:13px; left:9px; position:absolute; top:4px; width:2px
            }

            .info-buying-close::before {
                transform:rotate(45deg)
            }

            .info-buying-close::after {
                transform:rotate(-45deg)
            }

            .comment__item .support {
                background-color:#e8f1fb; display:inline-block; font-size:12px; line-height:17px; margin-top:5px; padding:8px 10px; position:relative
            }

            .comment__item .support::before {
                border-left:10px solid transparent; border-right:10px solid transparent; border-bottom:14px solid #e8f1fb; content:''; left:5px; position:absolute; top:-6px; z-index:-1
            }

            .comment-btn {
                display:flex; justify-content:center; margin-top:5px
            }

            .comment-btn__item {
                border:1px solid #2f80ed; border-radius:4px; color:#2f80ed; display:block; line-height:17px; max-width:215px; margin:0 6px; padding:11px 5px; text-align:center; width:100%
            }

            .comment-btn__item:first-child {
                margin-left:0
            }

            .comment-btn__item.blue {
                background-color:#2f80ed; color:#fff
            }

            .comment-btn__item span {
                padding-right:18px; position:relative
            }

            .comment-btn__item span::before {
                border-top:5px solid transparent; border-bottom:5px solid transparent; border-left:5px solid #2f80ed; content:''; position:absolute; top:2.5px; right:0
            }

            .comment-label {
                font-size:0; margin-top:10px
            }

            .comment-label span {
                background-color:#f1f1f1; border-radius:30px; display:inline-block; font-size:12px; line-height:16px; margin-right:5px; margin-bottom:5px; padding:2px 8px
            }

            .sRtXt {
                color:#2f80ed; margin:5px 0 10px; display:block; font-size:14px; cursor:pointer
            }

            .comment--all {
                margin-bottom:30px
            }

            .comment--all .comment__item {
                border-top:1px solid #f1f1f1
            }

            .comment--all .childC__item {
                border-top:none; border-left:4px solid #efefef; margin-left:10px; padding-left:10px; box-sizing:border-box
            }

            .comment-readmore {
                color:#4a90e2; display:inline-block; font-size:12px; line-height:17px; margin-top:10px
            }

            .comment-close {
                position:absolute; top:15px; right:25px
            }

            .show-comment {
                background-color:#fff; border-radius:8px; display:none; left:50%; position:fixed; padding-bottom:50px; top:50%; transform:translate(-50%, -50%); width:1000px; z-index:13
            }

            .show-comment-title {
                color:#2f80ed
            }

            .show-comment-title i {
                margin-right:8px
            }

            .show-comment-top {
                border-bottom:1px solid #e0e0e0; margin-bottom:20px; padding:20px
            }

            .show-comment.blockshow {
                display:block
            }

            .show-comment .comment__item {
                border:none
            }

            .show-comment .comment-label span {
                background-color:#f1f1f1
            }

            .show-comment .click-like, .show-comment .click-cmt {
                color:#2f80ed
            }

            .show-comment-main {
                align-items:center; display:flex
            }

            .cmt-item-left {
                width:56%
            }

            .cmt-item-right {
                padding:0 50px 0 35px; width:44%
            }

            .show-comment .cmt-img {
                margin:0 auto; text-align:center; width:80%
            }

            .show-comment .cmt-img img {
                height:500px; width:auto; max-width:100%; margin:0 auto; object-fit:contain
            }

            .show-comment .comment-content .cmt-txt {
                max-height:350px; overflow-y:auto
            }

            .show-comment .owl-carousel .owl-buttons div {
                background:rgba(0, 0, 0, .4) !important; box-shadow:none
            }

            .show-comment .owl-carousel .owl-buttons div::before {
                border-color:#fff
            }

            .box-history {
                cursor:pointer; margin-left:15px; position:relative
            }

            .box-history .txt-dots {
                background-color:#fff; box-shadow:0 4px 20px rgba(0, 0, 0, .2); border-radius:4px; display:none; font-size:12px; left:-3px; line-height:17px; padding:8px 12px; position:absolute; top:20px; width:140px; z-index:1
            }

            .show-history {
                background-color:#fff; border-radius:5px; display:none; left:50%; position:fixed; padding-bottom:40px; top:50%; transform:translate(-50%, -50%); width:660px; z-index:13
            }

            .show-history-wrap {
                padding:20px
            }

            .show-history-title {
                font-size:16px; font-weight:bold; line-height:22px
            }

            .show-history .hsr-name {
                display:inline-block; font-weight:bold; margin-right:5px; vertical-align:middle
            }

            .show-history .hsr-time, .show-history span, .show-history .hsr-date {
                color:#999; display:inline-block; font-size:12px; line-height:14px; vertical-align:middle
            }

            .show-history .hsr-txtp {
                line-height:20px; margin-top:10px
            }

            .show-history .litop {
                margin-bottom:5px
            }

            .show-history-main {
                height:370px; margin-top:10px; overflow:auto
            }

            .show-history-main li {
                border-bottom:1px solid #ddd; padding:15px 0 20px
            }

            .show-history-main li:last-child {
                border-bottom:none
            }

            .close-history {
                position:absolute; top:10px; right:15px
            }

            .close-history-href {
                border:1px solid #4a90e2; border-radius:4px; color:#4a90e2; display:block; line-height:16px; max-width:105px; margin:0 auto; padding:12px 5px; text-align:center
            }

            .show-history-top {
                border-bottom:1px solid #e0e0e0; padding:20px 30px 14px
            }

            .show-history-main::-webkit-scrollbar {
                width:10px; background-color:#f5f5f5
            }

            .show-history-main::-webkit-scrollbar-thumb {
                border-radius:10px; background-color:#4d90e0
            }

            .related {
                margin:15px 0 30px
            }

            .related__ttl {
                font-size:18px; font-weight:bold; line-height:25px; margin-right:35px
            }

            .related .listproduct li {
                border:none; margin-right:10px; padding:0 0 15px; width:140px
            }

            .related__top {
                align-items:center; display:flex; margin-bottom:25px
            }

            .related .box03__item {
                border-radius:30px; margin-right:5px; padding:7px 11px
            }

            .listproduct--thuongmua {
                width:750px
            }

            .detail-ss {
                display:none; left:50%; max-width:430px; margin:0 auto; position:fixed; transition:.4s; top:50%; transform:translate(-50%, -50%); width:100%; z-index:10
            }

            .detail-ss.showss {
                display:block
            }

            .detail-ss__wrap {
                background-color:#fff; border-radius:8px; margin-top:20px; padding-bottom:30px
            }

            .detail-ss-form {
                margin:15px 0; padding:0 45px
            }

            .detail-ss-form form {
                position:relative
            }

            .detail-ss-form input {
                background-color:rgba(142, 142, 147, .12); border:none; border-radius:8px; height:36px; padding:10px 10px 10px 35px; width:100%
            }

            .detail-ss-form .form-icon01 {
                left:10px; position:absolute; top:10px
            }

            .detail-ss-form .form-icon02 {
                position:absolute; top:12px; right:10px
            }

            .detail-ss__list {
                padding:0 45px
            }

            .detail-ss-item {
                align-items:center; border-bottom:1px solid #e0e0e0; display:flex; position:relative; padding:15px 5px
            }

            .detail-ss-item:last-child {
                border-right:none
            }

            .detail-ss-img {
                width:60px
            }

            .detail-ss-img img {
                max-width:60px
            }

            .detail-ss-ttl {
                color:#333; display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:2; line-height:20px; overflow:hidden; padding:0 20px; width:calc(100% - 60px); text-overflow:ellipsis
            }

            .btn-ss-now {
                background-color:#2f80ed; border-radius:4px; color:#fff; display:block; font-size:15px; line-height:18px; margin:20px 45px 0; padding:15px 5px; text-align:center
            }

            .btn-ss-now.disabled {
                background-color:#bdbdbd
            }

            .detail-ss-item .close-item {
                position:absolute; top:8px; right:8px
            }

            .detail-ss-item.noborder {
                border:none
            }

            .detail-ss-item .lastdiv {
                border:1px dashed #bdbdbd; border-radius:4px; padding:7px 10px; text-align:center; width:100%
            }

            .detail-ss-close {
                position:absolute; top:10px; right:10px
            }

            .detail-ss-txtdlt {
                color:#d0021c; line-height:21px; margin:15px 0; padding:0 45px
            }

            .undo-ss {
                background-color:#fff; border-radius:4px; padding:20px 20px 20px 25px
            }

            .undo-ss p {
                line-height:20px
            }

            .spmarket {
                background-color:#fff; border-radius:8px; display:none; left:50%; max-width:885px; position:fixed; top:50%; transition:.3s; transform:translate(-50%, -50%); width:100%; z-index:10
            }

            .spmarket.dpblock {
                display:block
            }

            .spmarket-wrap {
                display:flex
            }

            .spmarket .txtp {
                font-size:16px; font-weight:bold; line-height:21px; text-align:center
            }

            .spmarket__top {
                padding:20px 15px 10px; position:relative; width:530px
            }

            .spmarket__top::before {
                background-color:#e0e0e0; bottom:0; content:''; height:1px; left:0; position:absolute; width:calc(100% + 20px)
            }

            .spmarket__address {
                display:flex; margin-top:15px
            }

            .spmarket__address .boxitem {
                border:1px solid #e0e0e0; border-radius:4px; cursor:pointer; margin-left:10px; position:relative; padding:10px; width:165px
            }

            .spmarket__address .boxitem:nth-child(3n+1) {
                margin-left:0
            }

            .spmarket__address .boxitem::before {
                border-left:5px solid transparent; border-right:5px solid transparent; border-top:5px solid #999; content:''; position:absolute; top:17px; right:15px
            }

            .spmarket__address .boxitem.active::before {
                transform:rotate(-180deg)
            }

            .spmarket__address .boxitem p {
                color:#2f80ed
            }

            .spmarket__main {
                overflow-y:scroll; padding:15px 10px; height:500px; width:530px
            }

            .spmarket__main::-webkit-scrollbar {
                width:8px; background-color:#fbfbfb
            }

            .spmarket__main::-webkit-scrollbar-thumb {
                border-radius:10px; background-color:#bdbdbd
            }

            .spmarket .list-address p {
                line-height:20px; margin-bottom:12px
            }

            .spmarket .list-address a {
                color:#2f80ed
            }

            .spmarket .list-address li {
                cursor:pointer
            }

            .spmarket .add-circle {
                position:relative; padding-left:20px
            }

            .spmarket .add-circle::before {
                background-color:#c4c4c4; border-radius:50%; content:''; height:4px; left:5px; position:absolute; top:8px; width:4px
            }

            .spmarket .li-click .rdo {
                border:1px solid #e0e0e0; border-radius:50%; display:inline-block; float:left; height:16px; margin-top:2px; position:relative; width:16px
            }

            .spmarket .list-address .txt {
                padding-left:25px
            }

            .spmarket .li-click.checkrdo .rdo {
                border:2px solid #2f80ed; height:14px; width:14px
            }

            .spmarket .li-click .rdo::before {
                background-color:#2f80ed; border-radius:50%; content:''; height:8px; left:1px; opacity:0; position:absolute; top:1px; transition:.1s; width:8px
            }

            .spmarket .li-click.checkrdo .rdo::before {
                opacity:1
            }

            .spmarket .divrgt {
                border-top:1px solid #f1f1f1; padding:10px
            }

            .spmarket-close {
                position:absolute; top:7px; right:-45px
            }

            .btn-register {
                background-color:#fb6e2e; border:none; border-radius:4px; color:#fff; cursor:pointer; display:block; font-size:16px; font-weight:500; line-height:20px; margin-top:40px; padding:12px 10px; text-align:center
            }

            .box-register {
                background-color:#f1f1f1; border-radius:8px; padding:15px 25px 20px 17px; width:355px
            }

            .register-close {
                top:10px; right:10px
            }

            .box-register .back-store {
                color:#2f80ed; line-height:20px; padding-left:12px; position:relative
            }

            .box-register .back-store::before {
                border-top:2px solid #2f80ed; border-left:2px solid #2f80ed; content:''; height:6px; left:0; position:absolute; transform:rotate(-45deg); top:4px; width:6px
            }

            .show-address-txt {
                line-height:20px; margin-bottom:30px
            }

            .show-address-txt em {
                font-weight:bold; font-style:normal
            }

            .show-address-txt a {
                color:#2f80ed
            }

            .register-form .frm-item {
                cursor:pointer; display:inline-block; margin-right:25px; vertical-align:middle
            }

            .register-form .frm-item.active span {
                border:2px solid #2f80ed
            }

            .register-form .frm-item span {
                background-color:#fff; border:2px solid #bdbdbd; border-radius:50%; height:14px; position:relative; width:14px
            }

            .register-form .frm-item span::before {
                background-color:#2f80ed; border-radius:50%; content:''; height:8px; left:1px; opacity:0; position:absolute; top:1px; transition:.2s; width:8px
            }

            .register-form .frm-item.active span::before {
                opacity:1
            }

            .register-form .frm-item span, .register-form .frm-item p {
                display:inline-block; vertical-align:middle
            }

            .register-form .frm-gender {
                margin-bottom:10px
            }

            .register-form .frm-input {
                margin-bottom:10px
            }

            .register-form .frm-input input {
                border:1px solid #d7d7d7; border-radius:4px; color:#666; font-size:15px; height:40px; padding:10px 12px; width:100%
            }

            .register-form .frm-time__ttl {
                font-weight:bold; line-height:20px; margin:20px 0 10px
            }

            .box-register .divbtn {
                border-top:1px solid #f1f1f1; left:0; bottom:0; position:absolute; padding:10px; width:100%
            }

            .sticky-bar {
                position:fixed; top:50%; transform:translateY(-50%); right:30px; z-index:5
            }

            .sticky-bar__item {
                background-color:#fff; border:1px solid #e0e0e0; border-radius:4px; display:block; height:56px; margin:10px 0; position:relative; text-align:center; width:56px
            }

            .sticky-bar__item p {
                color:#2f80ed; font-size:11px; line-height:12px; margin-top:8px
            }

            .sticky-bar-search .jsSearch {
                height:56px; padding-top:10px
            }

            .sticky-bar-chat {
                padding-top:9px
            }

            .sticky-bar-cart {
                padding-top:10px
            }

            .sticky-bar-cart p {
                margin-top:5px
            }

            .sticky-bar-ss {
                padding-top:8px
            }

            .sticky-bar-number {
                background-color:#eb5757; border-radius:50%; color:#fff; font-size:11px; line-height:16px; height:16px; position:absolute; top:-7px; right:-7px; width:16px
            }

            .sticky-bar-input {
                position:absolute; top:-1px; transition:.2s; right:53px; width:0
            }

            .sticky-bar-input.active {
                width:190px
            }

            .sticky-bar-input input {
                border:none; border-radius:4px 0 0 4px; color:#666; height:56px; width:100%
            }

            .sticky-bar-input.active input {
                border:1px solid #e0e0e0; padding:2px 15px
            }

            .slt-address {
                background-color:#fff; border-radius:8px; display:none; left:0; max-width:430px; margin:0 auto; position:fixed; top:50%; transform:translateY(-50%); right:0; width:100%; z-index:9
            }

            .txt-slt {
                padding:11px 45px 15px
            }

            .txt-slt span {
                font-weight:bold
            }

            .slt-address-main {
                padding:0 45px 50px
            }

            .slt-address-submit {
                background-color:#fb6e2e; border-radius:4px; color:#fff; display:block; font-size:16px; line-height:20px; margin-top:15px; padding:13px 10px; text-align:center
            }

            .slt-address-submit.disabled {
                background-color:#e0e0e0; color:#333
            }

            .slt-address-item {
                cursor:pointer; position:relative; padding-bottom:10px
            }

            .slt-address-item p {
                border:1px solid #dfe1e5; border-radius:4px; line-height:20px; padding:9px 10px; position:relative
            }

            .slt-address-item p::before {
                border-left:5px solid transparent; border-right:5px solid transparent; border-top:5px solid #333; content:''; position:absolute; top:18px; right:18px
            }

            .slt-address-item p.arrow-up::before {
                top:16px; transform:rotate(-180deg)
            }

            .slt-address .lists {
                height:200px; overflow-y:scroll
            }

            .slt-address .lists::-webkit-scrollbar-track {
                background-color:#f5f5f5
            }

            .slt-address .lists::-webkit-scrollbar {
                background-color:#eaeaea; border-radius:50px; width:3px
            }

            .slt-address .lists::-webkit-scrollbar-thumb {
                background-color:#888; border-radius:50px
            }

            .slt-address .lists li {
                color:#2f80ed; float:left; font-size:13px; line-height:30px; width:50%
            }

            .slt-address-input {
                border:1px solid #dfe1e5; border-radius:4px; color:#666; height:40px; line-height:20px; padding:10px 15px; width:100%
            }

            .slt-address-show {
                background-color:#fff; border:1px solid #dfe1e5; box-shadow:0 0 8px rgba(0, 0, 0, .1); display:none; left:-10px; position:absolute; padding:10px; top:48px; width:calc(100% + 20px); z-index:10
            }

            .slt-address-close {
                position:absolute; top:10px; right:10px
            }

            .slt-address-search {
                margin-bottom:10px; position:relative
            }

            .slt-address-search input {
                background:rgba(142, 142, 147, .12); border:none; border-radius:8px; color:#666; height:36px; padding:8px 10px; width:100%
            }

            .slt-address-search i {
                position:absolute; top:12px; right:12px
            }

            .slt-address-show.active::before, .slt-address-show.active::after {
                content:''; position:absolute
            }

            .slt-address-show.active::before {
                border-left:10px solid transparent; border-right:10px solid transparent; border-bottom:10px solid #dfe1e5; content:''; left:35px; position:absolute; top:-10px
            }

            .slt-address-show.active::after {
                border-left:8px solid transparent; border-right:8px solid transparent; border-bottom:8px solid #fff; content:''; left:37px; position:absolute; top:-8px; z-index:10
            }

            .gallery {
                background-color:#fff; display:none; height:637px; left:50%; max-width:760px; margin:0 auto; overflow:hidden; position:fixed; top:50%; transition:.3s; transform:translate(-50%, -50%); width:100%; z-index:13
            }

            .gallery.showGlr {
                display:block
            }

            .gallery__top {
                border-bottom:1px solid #e0e0e0; padding:20px 45px; position:relative
            }

            .gallery__title {
                font-size:16px; font-weight:bold; line-height:22px
            }

            .gallery-close {
                position:absolute; top:12px; right:20px
            }

            .gallery__tab {
                border-radius:2px; display:flex; margin:15px 45px 25px
            }

            .gallery__tab a {
                background-color:#fff; border-left:1px solid #2f80ed; border-top:1px solid #2f80ed; border-bottom:1px solid #2f80ed; color:#2f80ed; font-size:12px; line-height:16px; padding:9px 0; text-align:center; width:60px
            }

            .gallery__tab a:first-child {
                border-radius:2px 0 0 2px
            }

            .gallery__tab a:last-child {
                border-right:1px solid #2f80ed; border-radius:0 2px 2px 0
            }

            .gallery__tab a.act {
                background-color:#2f80ed; color:#fff
            }

            .gallery__content {
                display:flex; flex-wrap:wrap; padding:0 40px
            }

            .gallery__content li {
                height:auto; margin-bottom:20px; opacity:1; padding:0 5px; transition:all .2s; width:20%
            }

            .gallery__content li img {
                max-width:100%; min-width:125px; height:125px; object-fit:cover; border-radius:5px
            }

            .gallery__content li.hide {
                opacity:0; padding:0; transition:all .1s; width:0%
            }

            .gallery-rating {
                text-align:center
            }

            .read-assess {
                background-color:#fff; border-radius:8px; left:50%; position:fixed; top:50%; transform:translate(-50%, -50%); z-index:13; overflow-y:auto; max-height:90vh; width:530px
            }

            .read-assess.showR {
                display:block
            }

            .read-assess__top {
                border-bottom:1px solid #e0e0e0; padding:25px 20px 15px 45px
            }

            .read-assess-main {
                padding:0 45px
            }

            .read-assess__title {
                font-weight:bold; line-height:20px
            }

            .read-assess-close {
                position:absolute; top:16px; right:20px
            }

            .read-assess .txt01 {
                width:270px; display:none
            }

            .read-assess .ul-star {
                display:flex; justify-content:center; width:270px
            }

            .read-assess .ul-star li {
                cursor:pointer; margin:0 6px; text-align:center; width:45px
            }

            .read-assess .ul-star p {
                font-size:12px; line-height:14px; margin-top:8px
            }

            .read-assess .ul-star p.active-slt {
                color:#fe8c23; font-weight:bold
            }

            .ul-orslt {
                margin:10px 0 0
            }

            .ul-orslt li {
                border-bottom:1px solid #e0e0e0; padding:10px 0
            }

            .ul-orslt li:last-child {
                border:none
            }

            .ul-orslt .li-left {
                color:#000; font-weight:500; float:left; line-height:20px; padding-right:15px; width:calc(100% - 142px)
            }

            .ul-orslt .li-right {
                font-size:0; float:right
            }

            .btn-assess {
                border:1px solid #bdbdbd; border-radius:16px; color:#333; display:inline-block; font-size:14px; line-height:14px; padding:8px 5px; text-align:center; width:68px
            }

            .btn-assess:last-child {
                margin-left:6px
            }

            .btn-assess.checkact {
                background-color:#e8f1fb; border:1px solid #2f80ed; color:#2f80ed
            }

            .read-assess .textarea {
                border:1px solid #bdbdbd; border-radius:4px
            }

            .read-assess .textarea-bottom {
                border-top:1px solid #bdbdbd; font-size:0; padding:11px 10px
            }

            .read-assess-form {
                margin-top:10px
            }

            .read-assess-form textarea {
                background-color:#fff; border-radius:4px 4px 0 0; border:none; resize:none; color:#666; height:67px; padding:10px; width:100%
            }

            .read-assess .send-img, .read-assess .mintext {
                display:inline-block; vertical-align:middle
            }

            .read-assess .send-img {
                color:#2f80ed; font-size:14px; line-height:20px
            }

            .read-assess .send-img i {
                margin:-3px 4px 0 0
            }

            .read-assess .send-img span {
                color:#666; margin-left:5px
            }

            .read-assess .resRtImg {
                background-color:#efefef; padding:10px; margin:5px -10px -7px
            }

            .read-assess .resRtImg li {
                display:inline-block; margin-right:10px
            }

            .read-assess .resRtImg li img {
                width:60px; height:60px; display:block; border-radius:5px; object-fit:cover
            }

            .read-assess .resRtImg li span {
                width:100%; text-align:center; font-size:12px; background-color:#fff; display:block; color:#288ad6; cursor:pointer
            }

            .read-assess .resRtImg li span.disabled {
                color:#ddd; cursor:none
            }

            .read-assess .mintext {
                color:#666; display:inline-block; font-size:12px; line-height:14px; text-align:right; width:35%
            }

            .read-assess .txt-agree {
                cursor:pointer; line-height:20px; margin:15px 0; position:relative; padding-left:22px
            }

            .read-assess .txt-agree.selected span::before, .read-assess .txt-agree.selected span::after {
                background-color:#2f80ed; border-radius:30px; bottom:1px; content:''; position:absolute; width:2px
            }

            .read-assess .txt-agree.selected span::before {
                height:7px; left:3px; transform:rotate(-35deg)
            }

            .read-assess .txt-agree.selected span::after {
                height:12px; left:8px; transform:rotate(38deg)
            }

            .read-assess .txt-agree span {
                border:1px solid #666; border-radius:3px; display:inline-block; left:0; height:16px; position:absolute; top:2px; width:16px
            }

            .list-input {
                font-size:0; margin-bottom:20px; display:flex
            }

            .input-assess {
                border:1px solid #bdbdbd; border-radius:4px; color:#666; height:40px; line-height:20px; margin-right:12px; padding:10px; flex:auto
            }

            .input-assess:last-child {
                margin-right:0
            }

            .submit-assess {
                background-color:#2f80ed; border:none; border-radius:4px; color:#fff; cursor:pointer; display:block; margin:0 auto; padding:11px 10px; width:215px; text-align:center
            }

            .assess-txtbt {
                font-size:12px; padding:15px 0; text-align:center
            }

            .assess-txtbt a {
                color:#2f80ed; font-size:13px
            }

            .select-star {
                display:flex; margin:20px 0 15px; justify-content:center
            }

            #cmt_sync1 .owl-stage {
                align-items:center; display:flex !important
            }

            .owl-nav button {
                background:rgba(255, 255, 255, .9) !important; height:60px; width:30px; position:absolute; top:50%; transform:translateY(-50%); z-index:2
            }

            .owl-nav button span {
                display:block; text-indent:-9999px
            }

            .owl-nav button span::before {
                content:""; border-top:3px solid #666; border-right:3px solid #666; content:''; height:22px; position:absolute; top:18px; width:22px
            }

            .owl-nav button.owl-prev span::before {
                left:10px; transform:rotate(-135deg)
            }

            .owl-nav button.owl-next span::before {
                transform:rotate(45deg); right:8px
            }

            .owl-nav .owl-prev.disabled, .owl-nav .owl-next.disabled {
                display:none
            }

            .lbMsgRt {
                color:#f00; display:block; margin:10px 0
            }

            .hideRtCt {
                display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:4; overflow:hidden; text-overflow:ellipsis
            }

            .pgrc {
                text-align:center; overflow:hidden; clear:both; margin:-43px 0 15px 0
            }

            .pgrc span {
                display:inline-block; overflow:hidden; float:left; padding:4px 10px; background:#eee; border-radius:3px; text-align:center; color:#333; margin-right:6px; font-size:12px; clear:none !important; cursor:pointer
            }

            .pgrc span.active {
                float:left; padding:4px 10px; background:#ccc; border-radius:3px; text-align:center; color:#333; margin-right:6px; font-size:12px; clear:none !important; cursor:pointer
            }

            .pgrc a {
                padding:0 10px; color:#288ad6; display:inline-block; overflow:hidden
            }

            .pgrc .pagcomment {
                margin:5px 0
            }

            .pgrc a {
                float:left; padding:4px 10px; background:#eee; border-radius:3px; text-align:center; color:#333; margin-right:6px; font-size:12px; cursor:pointer
            }

            .pgrc a:hover {
                background:#ddd
            }

            #cmtmask {
                display:none
            }

            .box-cmt-popup {
                display:block; overflow:hidden; padding:12px 0
            }

            .box-cmt-popup .info-pro {
                display:flex; overflow:hidden; align-items:center
            }

            .box-cmt-popup .info-pro .img-cmt {
                width:65px; height:65px; margin:0 19px 0 0; display:flex; align-items:center
            }

            .box-cmt-popup .info-pro .img-cmt img {
                width:100%
            }

            .box-cmt-popup .info-pro .text-pro {
                display:block; overflow:hidden; width:calc(100% - 84px)
            }

            .box-cmt-popup .info-pro .text-pro h3 {
                color:#000; display:-webkit-box; -webkit-box-orient:vertical; overflow:hidden; text-overflow:ellipsis; -webkit-line-clamp:2
            }

            .box-cmt-popup .info-pro .text-pro small {
                display:block; overflow:hidden; padding:3px 0 0; font-size:13px; line-height:17px; color:#666
            }

            .box-cmt-popup ul li {
                display:inline-block; vertical-align:top; margin:0 5px 0 0; width:7%
            }

            .box-cmt-popup ul li span {
                display:block; overflow:hidden; font-size:11px; line-height:13px; color:#666; padding:5px 0 0
            }

            .ul-orslt, .read-assess-form {
                display:none
            }

            .rt-success-popup {
                background-color:#fff; border-radius:8px; left:50%; position:fixed; top:50%; transform:translate(-50%, -50%); z-index:13; text-align:center; padding:20px 15px; width:365px
            }

            .rt-success-popup__title {
                font-weight:bold
            }

            .rt-success-popup__content {
                margin-top:20px
            }

            .rt-success-popup__close {
                margin-top:20px; border:1px solid #333; background:unset; border-radius:8px; padding:10px 60px; cursor:pointer
            }

            .rt-success-popup__refer {
                margin-top:20px; font-size:11px; color:#878787
            }

            .rt-success-popup__refer a {
                color:#4195eb
            }

            .inputrating__group {
                position:relative; margin-bottom:15px
            }

            .txtcount__box {
                right:10px; position:absolute; bottom:7px; color:#666; bottom:-13px
            }

            .box-border {
                border:1px solid #e0e0e0; border-radius:8px; padding:15px 15px 20px
            }

            .frames-detail {
                border:1px solid #e0e0e0; display:flex; margin-bottom:40px; padding:25px
            }

            .rating__title {
                font-weight:bold; font-size:18px; line-height:20px
            }

            .rating-star {
                align-items:flex-start; display:flex; margin:25px 0 20px
            }

            .rating-star .point {
                color:#fe8c23; font-weight:bold; font-size:22px; line-height:27px; margin-top:2px
            }

            .rating-img {
                padding:0 0 20px
            }

            .rating-left {
                border-right:1px solid #f1f1f1; position:relative; padding:0 20px 10px 10px; text-align:center; width:38.2%
            }

            .rating-top {
                align-items:center; display:flex; margin-bottom:15px; margin-top:-10px
            }

            .rating-total {
                color:#333; font-size:14px; line-height:17px; margin-top:4px
            }

            .list-star {
                margin:0 8px
            }

            .rating-list li {
                align-items:center; display:flex; margin-bottom:7px
            }

            .rating-list li:last-child {
                margin-bottom:0
            }

            .rating-list .number-star {
                font-size:12px; line-height:14px; text-align:left; width:25px
            }

            .rating-list .number-star i {
                margin-top:-4px
            }

            .rating-list .number-percent {
                color:#2f80ed; font-size:12px; font-weight:bold; line-height:15px; padding-left:10px; text-align:left; width:35px; cursor:pointer
            }

            .rating-list .number-percent.dsp {
                color:#666
            }

            .rating-list .timeline-star {
                background-color:#eee; height:4px; position:relative; width:calc(100% - 60px)
            }

            .rating-list .timing {
                background-color:#fe8c23; left:0; height:4px; position:absolute; top:0
            }

            .rating-list .timing67 {
                width:67%
            }

            .rating-list .timing23 {
                width:23%
            }

            .rating-list .timing7 {
                width:7%
            }

            .rating-list .timing1 {
                width:1%
            }

            .rating-list .timing2 {
                width:2%
            }

            .rating-img-list {
                display:flex; position:relative
            }

            .rating-img-list li {
                cursor:pointer; line-height:0; margin-right:5px
            }

            .rating-img-list li:first-child {
                margin-left:0
            }

            .rating-img-list li:last-child {
                position:relative
            }

            .rating-img-list img {
                width:109px; height:109px; border-radius:5px; object-fit:cover
            }

            .rating-img-ttl {
                font-size:16px; font-weight:bold; line-height:22px; margin-bottom:20px
            }

            .rating-img-rd {
                align-items:center; background-color:rgba(0 0 0/.76); color:#fff; display:flex; font-size:13px; justify-content:center; height:100%; line-height:16px; left:0; position:absolute; text-align:center; top:0; width:100%; border-radius:5px; padding:0 5px
            }

            .rating-circle {
                padding:0 18px; width:61.8%
            }

            .rating-circle-ttl {
                line-height:17px; margin-bottom:15px
            }

            .rating-circle-ttl em {
                font-style:normal; font-weight:bold
            }

            .rating-circle-card {
                border-radius:4px; display:flex; justify-content:center; overflow:hidden; position:relative; text-align:center; transition:.3s
            }

            .rating-circle-card .item-cart {
                position:relative; width:20%
            }

            .rating-circle-card svg {
                height:50px; position:relative; transform:rotate(-87deg); width:50px; z-index:1
            }

            .rating-circle-card circle {
                fill:none; height:100%; transform:translate(5px, 5px); stroke:#eee; stroke-width:5; z-index:1; width:100%
            }

            .rating-circle-card svg circle:nth-child(2) {
                animation:progress 2s ease-out forwards; -webkit-animation:progress 2s ease-out forwards; stroke-dasharray:125; stroke-dashoffset:125
            }

            .rating-circle-card .number {
                border-radius:50%; font-size:12px; line-height:14px; left:1px; position:absolute; top:18px; width:100%
            }

            .rating-circle-card .txt {
                font-size:12px; line-height:14px
            }

            .rating-search {
                margin-top:15px; position:relative; width:260px
            }

            .rating-search i {
                position:absolute; top:7px; left:10px
            }

            .rating-search input {
                border:1px solid #ddd; border-radius:5px; color:#666; height:32px; padding:8px 10px 8px 35px; width:100%
            }

            .rating-viewall {
                border-left:1px solid #e0e0e0; border-right:1px solid #e0e0e0; display:block; margin:0; width:30%
            }

            .rating-viewall .rating-left {
                align-items:center; border:none; display:flex; justify-content:center; margin:0 auto; width:60%
            }

            .rating-viewall .rating-left .point {
                margin-right:15px
            }

            .rating-viewall .rating-left::before {
                display:none
            }

            .rating-viewall .rating-right {
                margin:0 auto; padding:0; width:55%
            }

            .rating-viewall .rating-circle {
                width:39.5%
            }

            .rating-circle-viewall {
                padding-left:30px
            }

            .rating-circle-viewall .item-cart {
                margin:0 6px; padding:0; width:80px
            }

            .rating-circle-viewall .rating-circle-card {
                justify-content:flex-start
            }

            .frames-detail .comment-btn__item {
                margin:15px auto 0; padding:8px 5px
            }

            .rating-img-viewall .rating-img-list li {
                max-width:125px; margin-right:10px
            }

            .comment__item .click-use.act .info-buying {
                display:block
            }

            .comment__item .click-use:hover .info-buying {
                display:block
            }

            .comment__item .click-use.act .info-buying {
                display:none
            }

            .comment__item .click-use.act:hover .info-buying {
                display:none
            }

            .info-buying {
                background-color:#ebebeb; bottom:27px; box-shadow:0 2px 4px rgba(0, 0, 0, .12); border-radius:4px; color:#333; display:none; padding:20px 15px 15px; position:absolute; right:-5px; width:290px
            }

            .info-buying::before {
                border-style:solid; bottom:-17px; border-color:#ebebeb transparent transparent transparent; border-width:9px; content:''; position:absolute; right:6px
            }

            .info-buying-txt {
                display:flex; justify-content:center
            }

            .info-buying .txtitem {
                text-align:center
            }

            .info-buying .txtitem:first-child {
                margin-right:80px
            }

            .txtitem .txt01, .txtitem .txtdate {
                font-size:12px; line-height:16px
            }

            .txtitem .txt01 {
                color:#666
            }

            .txtitem .txtdate {
                font-weight:bold
            }

            .info-buying .timeline-txt {
                font-size:12px; line-height:16px; margin-top:10px; text-align:center
            }

            .info-buying .timeline-txt span {
                font-weight:bold
            }

            .length-using {
                background-color:#c4c4c4; height:1px; margin:10px auto 0; position:relative; width:190px
            }

            .length-percent {
                background-color:#999; height:3px; position:relative; top:-1px
            }

            .length-using::before {
                border-top:1px solid #c4c4c4; border-right:1px solid #c4c4c4; content:''; height:6px; position:absolute; transform:rotate(45deg); top:-3px; right:0; width:6px
            }

            .length-percent::before, .length-percent::after {
                background-color:#53b859; border-radius:50%; content:''; height:8px; position:absolute; top:-3px; width:8px
            }

            .length-percent::before {
                left:0
            }

            .length-percent::after {
                right:0
            }

            .info-buying-list {
                margin-top:15px
            }

            .info-buying-list li {
                color:#666; font-size:12px; line-height:17px; margin-bottom:5px
            }

            .info-buying-list li span {
                background-color:#666; border-radius:50%; display:inline-block; height:4px; margin:6px 6px 0 0; vertical-align:top; width:4px
            }

            .info-buying-close {
                background-color:#333; border:2px solid #fff; border-radius:50%; box-shadow:0 2px 4px rgba(0, 0, 0, .12); height:25px; position:absolute; top:-10px; right:-10px; width:25px
            }

            .info-buying-close::before, .info-buying-close:after {
                background-color:#fff; content:''; height:13px; left:9px; position:absolute; top:4px; width:2px
            }

            .info-buying-close::before {
                transform:rotate(45deg)
            }

            .info-buying-close::after {
                transform:rotate(-45deg)
            }

            .comment__item {
                border-bottom:1px solid #f1f1f1; padding:15px 0
            }

            .comment__item .txtname, .comment__item .tickbuy {
                display:inline-block; vertical-align:middle
            }

            .comment__item .txtname {
                font-weight:bold; margin-right:8px; text-transform:capitalize
            }

            .comment__item .tickbuy {
                color:#2ba832; font-size:12px; line-height:14px
            }

            .comment__item .item-rate {
                margin-top:5px
            }

            .childC__item {
                border-top:none; border-left:4px solid #efefef; margin-left:10px; padding-left:10px; box-sizing:border-box
            }

            .comment .txtname, .comment .tickbuy {
                display:inline-block; vertical-align:middle
            }

            .comment .txtname {
                font-weight:bold; margin-right:8px; text-transform:capitalize
            }

            .comment .tickbuy {
                color:#2ba832; font-size:12px; line-height:14px
            }

            .comment .item-rate {
                margin-top:5px
            }

            .comment-star, .intro-future {
                display:inline-block; vertical-align:middle
            }

            .intro-future {
                font-size:13px; margin-left:15px; padding-top:5px
            }

            .intro-future i {
                margin:-1px 2px 0 0
            }

            .comment-content {
                margin-top:10px
            }

            .comment-content .cmt-txt {
                font-size:14px; line-height:20px
            }

            .comment-content .cmt-img {
                cursor:pointer; display:inline-block; margin-right:8px; margin-top:10px; vertical-align:top
            }

            .comment-content .cmt-img img {
                width:125px; height:125px; object-fit:cover; border-radius:5px
            }

            .comment-content.noimg .cmt-txt {
                padding-right:0; width:100%; white-space:pre-line
            }

            .comment-content .hideRtCt {
                display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:7; overflow:hidden; text-overflow:ellipsis
            }

            .comment__item .qtv {
                background:#f1c40f; color:#333; font-size:11px; padding:3px; margin-left:10px
            }

            .comment .item-click {
                margin-top:10px
            }

            .comment .click-like, .comment .click-cmt {
                color:#2f80ed; font-size:13px; margin-right:5px
            }

            .comment .click-use {
                border-left:1px solid #e0e0e0; color:#999; font-size:12px; padding-left:5px; position:relative
            }

            .comment .support {
                background-color:#e8f1fb; font-size:12px; line-height:25px; margin-top:5px; padding:4px 5px; position:relative
            }

            .comment .support::before {
                border-left:10px solid transparent; border-right:10px solid transparent; border-bottom:14px solid #e8f1fb; content:''; left:5px; position:absolute; top:-6px; z-index:-1
            }

            .comment__item .support {
                background-color:#e8f1fb; display:inline-block; font-size:12px; line-height:17px; margin-top:5px; padding:8px 10px; position:relative
            }

            .comment__item .support::before {
                border-left:10px solid transparent; border-right:10px solid transparent; border-bottom:14px solid #e8f1fb; content:''; left:5px; position:absolute; top:-6px; z-index:-1
            }

            .comment-btn {
                display:flex; padding:15px 10px
            }

            .comment-btn__item {
                border:1px solid #2f80ed; border-radius:4px; color:#2f80ed; display:block; line-height:17px; margin-left:3%; padding:11px 5px; text-align:center; width:48.5%
            }

            .comment-btn__item:first-child {
                margin-left:0
            }

            .comment-btn__item.blue {
                background-color:#2f80ed; color:#fff
            }

            .selStr {
                margin:10px 0 5px; cursor:pointer
            }

            .selStr span {
                margin-right:10px; vertical-align:middle
            }

            .lbMsgRt {
                color:#f00; display:block; margin:10px 0
            }

            .ratingLst .reply {
                margin-top:12px; width:100%
            }

            .ratingLst .reply input {
                border:1px solid #ddd; border-radius:4px; -webkit-border-radius:4px; -moz-border-radius:4px; font-size:14px; color:#999; padding:5px; width:75%
            }

            .ratingLst .reply .rrSend {
                padding:6px 10px; border:1px solid #288ad6; background:#fff; font-size:13px; color:#288ad6; -moz-border-radius:4px; -webkit-border-radius:4px; border-radius:4px
            }

            .ratingLst .ifrl {
                margin:10px 0 0; color:#ccc; width:100%
            }

            .ratingLst .ifrl span {
                color:#333
            }

            .ratingLst .ifrl a {
                color:#288ad6
            }

            .read-assess {
                background-color:#fff; border-radius:8px; left:50%; position:fixed; top:50%; transform:translate(-50%, -50%); z-index:13; overflow-y:auto; max-height:90vh; width:530px
            }

            .read-assess.showR {
                display:block
            }

            .read-assess__top {
                border-bottom:1px solid #e0e0e0; padding:25px 20px 15px 45px
            }

            .read-assess-main {
                padding:0 45px
            }

            .read-assess__title {
                font-weight:bold; line-height:20px
            }

            .read-assess-close {
                position:absolute; top:16px; right:20px
            }

            .read-assess .txt01 {
                width:270px; display:none
            }

            .read-assess .ul-star {
                display:flex; justify-content:center; width:270px
            }

            .read-assess .ul-star li {
                cursor:pointer; margin:0 6px; text-align:center; width:45px
            }

            .read-assess .ul-star p {
                font-size:12px; line-height:14px; margin-top:8px
            }

            .read-assess .ul-star p.active-slt {
                color:#fe8c23; font-weight:bold
            }

            .read-assess .textarea {
                border:1px solid #bdbdbd; border-radius:4px
            }

            .read-assess .textarea-bottom {
                border-top:1px solid #bdbdbd; font-size:0; padding:11px 10px
            }

            .read-assess-form {
                margin-top:10px
            }

            .read-assess-form textarea {
                background-color:#fff; border-radius:4px 4px 0 0; resize:none; border:none; color:#666; height:67px; padding:10px; width:100%
            }

            .read-assess .send-img, .read-assess .mintext {
                display:inline-block; vertical-align:middle
            }

            .read-assess .send-img {
                color:#2f80ed; font-size:14px; line-height:20px
            }

            .read-assess .send-img i {
                margin:-3px 4px 0 0
            }

            .read-assess .send-img span {
                color:#666; margin-left:5px
            }

            .read-assess .resRtImg {
                background-color:#efefef; padding:10px; margin:5px -10px -7px
            }

            .read-assess .resRtImg li {
                display:inline-block; margin-right:10px
            }

            .read-assess .resRtImg li img {
                width:60px; height:60px; display:block; border-radius:5px; object-fit:cover
            }

            .read-assess .resRtImg li span {
                width:100%; text-align:center; font-size:12px; background-color:#fff; display:block; color:#288ad6; cursor:pointer
            }

            .read-assess .resRtImg li span.disabled {
                color:#ddd; cursor:none
            }

            .read-assess .mintext {
                color:#666; display:inline-block; font-size:12px; line-height:14px; text-align:right; width:35%
            }

            .read-assess .txt-agree {
                cursor:pointer; line-height:20px; margin:15px 0; position:relative; padding-left:22px
            }

            .read-assess .txt-agree.selected span::before, .read-assess .txt-agree.selected span::after {
                background-color:#2f80ed; border-radius:30px; bottom:1px; content:''; position:absolute; width:2px
            }

            .read-assess .txt-agree.selected span::before {
                height:7px; left:3px; transform:rotate(-35deg)
            }

            .read-assess .txt-agree.selected span::after {
                height:12px; left:8px; transform:rotate(38deg)
            }

            .read-assess .txt-agree span {
                border:1px solid #666; border-radius:3px; display:inline-block; left:0; height:16px; position:absolute; top:2px; width:16px
            }

            .ul-orslt li {
                border-bottom:1px solid #e0e0e0; padding:10px 0
            }

            .ul-orslt li:last-child {
                border:none
            }

            .ul-orslt .li-left {
                color:#000; font-weight:500; float:left; line-height:20px; padding-right:15px; width:calc(100% - 142px)
            }

            .ul-orslt .li-right {
                font-size:0; float:right
            }

            .list-input {
                font-size:0; margin-bottom:20px; display:flex
            }

            .input-assess {
                border:1px solid #bdbdbd; border-radius:4px; color:#666; height:40px; line-height:20px; margin-right:12px; padding:10px; flex:auto
            }

            .input-assess:last-child {
                margin-right:0
            }

            .btn-assess {
                border:1px solid #bdbdbd; border-radius:16px; color:#333; display:inline-block; font-size:14px; line-height:14px; padding:8px 5px; text-align:center; width:68px
            }

            .btn-assess:last-child {
                margin-left:6px
            }

            .btn-assess.checkact {
                background-color:#e8f1fb; border:1px solid #2f80ed; color:#2f80ed
            }

            .submit-assess {
                background-color:#2f80ed; border:none; border-radius:4px; color:#fff; cursor:pointer; display:block; margin:0 auto; padding:11px 10px; width:215px; text-align:center
            }

            .assess-txtbt {
                font-size:12px; padding:15px 0; text-align:center
            }

            .assess-txtbt a {
                color:#2f80ed; font-size:13px
            }

            .select-star {
                display:flex; margin:20px 0 0; justify-content:center
            }

            .owl-nav button {
                background:rgba(255, 255, 255, .9) !important; height:60px; width:30px; position:absolute; top:50%; transform:translateY(-50%); z-index:2
            }

            .owl-nav button span {
                display:block; text-indent:-9999px
            }

            .owl-nav button span::before {
                content:""; border-top:3px solid #666; border-right:3px solid #666; content:''; height:22px; position:absolute; top:18px; width:22px
            }

            .owl-nav button.owl-prev span::before {
                left:10px; transform:rotate(-135deg)
            }

            .owl-nav button.owl-next span::before {
                transform:rotate(45deg); right:8px
            }

            .owl-nav .owl-prev.disabled, .owl-nav .owl-next.disabled {
                display:none
            }

            .gallery {
                background-color:#fff; display:none; height:650px; left:50%; max-width:760px; margin:0 auto; overflow-y:scroll; position:relative; top:50%; transition:.3s; transform:translate(-50%, -50%); width:100%; z-index:13
            }

            .gallery.showGlr {
                display:block; position:fixed
            }

            .gallery__top {
                border-bottom:1px solid #e0e0e0; padding:20px 45px; position:relative
            }

            .gallery__title {
                font-size:16px; font-weight:bold; line-height:22px
            }

            .gallery-close {
                position:absolute; top:12px; right:20px
            }

            .gallery__tab {
                border-radius:2px; display:flex; margin:15px 45px 25px
            }

            .gallery__tab a {
                background-color:#fff; border-left:1px solid #2f80ed; border-top:1px solid #2f80ed; border-bottom:1px solid #2f80ed; color:#2f80ed; font-size:12px; line-height:16px; padding:9px 0; text-align:center; width:60px
            }

            .gallery__tab a:first-child {
                border-radius:2px 0 0 2px
            }

            .gallery__tab a:last-child {
                border-right:1px solid #2f80ed; border-radius:0 2px 2px 0
            }

            .gallery__tab a.act {
                background-color:#2f80ed; color:#fff
            }

            .gallery__content {
                display:flex; flex-wrap:wrap; padding:0 40px
            }

            .gallery__content li {
                height:auto; margin-bottom:20px; opacity:1; padding:0 5px; transition:all .2s; width:20%
            }

            .gallery__content li img {
                max-width:100%; min-width:125px; height:125px; object-fit:cover; border-radius:5px
            }

            .gallery__content li.hide {
                opacity:0; padding:0; transition:all .1s; width:0%
            }

            .gallery__content li .gallery-rating {
                height:unset !important
            }

            .gallery-rating {
                text-align:center
            }

            .content-wrap {
                padding:0 20px; width:840px
            }

            .comment-close {
                position:absolute; top:15px; right:25px
            }

            .show-comment {
                background-color:#fff; border-radius:8px; display:none; left:50%; position:fixed; padding-bottom:50px; top:50%; transform:translate(-50%, -50%); width:1000px; z-index:13
            }

            .show-comment-title {
                color:#2f80ed; cursor:pointer
            }

            .show-comment-title i {
                margin-right:8px
            }

            .show-comment-top {
                border-bottom:1px solid #e0e0e0; margin-bottom:20px; padding:20px
            }

            .show-comment.blockshow {
                display:block
            }

            .show-comment .comment__item {
                border:none
            }

            .show-comment .comment-label span {
                background-color:#f1f1f1
            }

            .show-comment .click-like, .show-comment .click-cmt {
                color:#2f80ed
            }

            .show-comment-main {
                align-items:center; display:flex
            }

            .show-comment .cmt-img {
                margin:0 auto; text-align:center; width:80%
            }

            .show-comment .cmt-img img {
                height:500px; width:auto; max-width:100%; margin:0 auto; object-fit:contain
            }

            .show-comment .owl-carousel .owl-buttons div {
                background:rgba(0, 0, 0, .4) !important; box-shadow:none
            }

            .show-comment .owl-carousel .owl-buttons div::before {
                border-color:#fff
            }

            .cmt-item-left {
                width:56%
            }

            .cmt-item-right {
                padding:0 50px 0 35px; width:44%
            }

            .comment-label {
                font-size:0; margin-top:10px
            }

            .comment-label span {
                background-color:#f1f1f1; border-radius:30px; display:inline-block; font-size:12px; line-height:16px; margin-right:5px; margin-bottom:5px; padding:2px 8px
            }

            .sRtXt {
                color:#2f80ed; margin:5px 0 10px; display:block; font-size:14px; cursor:pointer
            }

            .rRepPopup {
                background-color:#fff; height:320px; left:0; max-width:640px; position:fixed; top:0; transition:.3s; right:0; width:100%; z-index:13; bottom:0; margin:auto
            }

            .rRepPopup.blockshow {
                right:0
            }

            .rRepPopup__top {
                border-bottom:1px solid #e0e0e0; padding:15px 85px 15px 10px
            }

            .rRepPopup__title {
                font-weight:bold; line-height:20px
            }

            .rRepPopup-close {
                top:10px; right:10px
            }

            .rRepPopup .rCfmInfo {
                display:block; overflow:hidden; background:#fff; padding:10px
            }

            .rRepPopup .rCfmInfo .cgd {
                margin:10px 0
            }

            .rRepPopup .rCfmInfo .cgd .c_female {
                margin-left:10px
            }

            .rRepPopup .rCfmInfo span {
                cursor:pointer
            }

            .rRepPopup .rCfmInfo input {
                display:block; padding:8px; width:100%; margin:0 auto 10px; height:40px; border:1px solid #dadada; background:#fff; border-radius:4px; font-size:14px; box-sizing:border-box
            }

            .rRepPopup .rCfmInfo button {
                display:block; width:100%; margin:0 auto 10px; padding:8px; height:40px; font-size:14px; color:#fff; text-transform:uppercase; border:1px solid #4a90e2; border-radius:4px; background-color:#4a90e2
            }

            .rRepPopup .rCfmInfo a {
                color:#4a90e2; margin:5px 0 12px; display:inline-block
            }

            .rRepPopup .rCfmInfo .lbMsgPopCmt {
                display:block; color:#d0021b; margin:5px 0
            }

            .close-history {
                position:absolute; top:10px; right:15px
            }

            .close-history-href {
                border:1px solid #4a90e2; border-radius:4px; color:#4a90e2; display:block; line-height:16px; max-width:105px; margin:0 auto; padding:12px 5px; text-align:center
            }

            .box-history {
                cursor:pointer; margin-left:15px; position:relative; display:inline-block
            }

            .box-history .txt-dots {
                background-color:#fff; box-shadow:0 4px 20px rgba(0, 0, 0, .2); border-radius:4px; display:none; font-size:12px; left:-3px; line-height:17px; padding:8px 12px; position:absolute; top:20px; width:140px; z-index:1
            }

            .show-history {
                background-color:#fff; border-radius:5px; display:none; left:50%; position:fixed; padding-bottom:40px; top:50%; transform:translate(-50%, -50%); width:660px; z-index:13
            }

            .show-history-wrap {
                padding:20px
            }

            .show-history-title {
                font-size:16px; font-weight:bold; line-height:22px
            }

            .show-history .hsr-name {
                display:inline-block; font-weight:bold; margin-right:5px; vertical-align:middle
            }

            .show-history .hsr-time, .show-history span, .show-history .hsr-date {
                color:#999; display:inline-block; font-size:12px; line-height:14px; vertical-align:middle
            }

            .show-history .hsr-txtp {
                line-height:20px; margin-top:10px
            }

            .show-history .litop {
                margin-bottom:5px
            }

            .show-history-main {
                height:370px; margin-top:10px; overflow:auto
            }

            .show-history-main li {
                border-bottom:1px solid #ddd; padding:15px 0 20px
            }

            .show-history-main li:last-child {
                border-bottom:none
            }

            .c-btnclose {
                background-color:#fff; border:1px solid #e0e0e0; border-radius:4px; line-height:21px; padding:4px 7px; position:absolute; text-align:right; width:66px; cursor:pointer
            }

            .c-btnclose::before, .c-btnclose::after {
                background-color:#333; content:''; left:14px; height:10px; position:absolute; top:9px; width:1px
            }

            .c-btnclose::before {
                transform:rotate(45deg)
            }

            .c-btnclose::after {
                transform:rotate(-45deg)
            }

            .gallery {
                background-color:#fff; display:none; height:637px; left:50%; max-width:760px; margin:0 auto; overflow-y:scroll; position:fixed; top:50%; transition:.3s; transform:translate(-50%, -50%); width:100%; z-index:13
            }

            .gallery.showGlr {
                display:block
            }

            .gallery__top {
                border-bottom:1px solid #e0e0e0; padding:20px 45px; position:relative
            }

            .gallery__title {
                font-size:16px; font-weight:bold; line-height:22px
            }

            .gallery-close {
                position:absolute; top:12px; right:20px
            }

            .gallery__tab {
                border-radius:2px; display:flex; margin:15px 45px 25px
            }

            .gallery__tab a {
                background-color:#fff; border-left:1px solid #2f80ed; border-top:1px solid #2f80ed; border-bottom:1px solid #2f80ed; color:#2f80ed; font-size:12px; line-height:16px; padding:9px 0; text-align:center; width:60px
            }

            .gallery__tab a:first-child {
                border-radius:2px 0 0 2px
            }

            .gallery__tab a:last-child {
                border-right:1px solid #2f80ed; border-radius:0 2px 2px 0
            }

            .gallery__tab a.act {
                background-color:#2f80ed; color:#fff
            }

            .gallery__content {
                display:flex; flex-wrap:wrap; padding:0 40px
            }

            .gallery__content li {
                height:auto; margin-bottom:20px; opacity:1; padding:0 5px; transition:all .2s; width:20%
            }

            .gallery__content li img {
                max-width:100%; min-width:125px; height:125px; object-fit:cover; border-radius:5px
            }

            .gallery__content li.hide {
                opacity:0; padding:0; transition:all .1s; width:0%
            }

            .gallery-rating {
                text-align:center
            }

            .icondetail-radcheck {
                background-position:-150px -95px; width:18px; height:18px
            }

            .icondetail-rad {
                background-position:-120px -95px; width:18px; height:18px
            }

            .icondetail-window {
                background-position:-260px -115px; height:15px; width:15px
            }

            .icondetail-likewhite {
                background-position:-155px -135px; height:16px; width:16px
            }

            .icondetail-logoyl {
                background-position:-205px -55px; height:15px; width:15px
            }

            #comment {
                margin-top:20px !important; width:100%
            }

            .rating {
                overflow:hidden; border-bottom:1px solid #f1f1f1
            }

            .rating-star.left {
                float:left; width:38.2%
            }

            .rating-star.left .rating-left {
                width:auto
            }

            .rating-img.right {
                float:right; padding:0 0 0 18px; width:61.8%; margin:25px 0 20px; border:none
            }

            .rating-img.right .rating-img-list {
                display:block
            }

            .rating-img.right .rating-img-list li {
                display:inline-block; vertical-align:top; margin-bottom:7px
            }

            .rating-img.right .rating-img-list img {
                width:72px; height:72px
            }

            .first-rating {
                border-bottom:none
            }

            .first-rating__title, .first-rating__title--success {
                display:flex
            }

            .first-rating__title i, .first-rating__title--success i {
                margin-right:15px
            }

            .first-rating__title--success {
                display:none
            }

            .first-rating__title--success strong {
                font-size:16px; line-height:22px
            }

            .first-rating__rating {
                display:flex; align-items:center; margin:5px 0 0 44px
            }

            .first-rating__rating .rating-product__star, .first-rating__rating--success .rating-product__star {
                display:inline-block; margin-left:15px
            }

            .first-rating__rating .rating-product__star li, .first-rating__rating--success .rating-product__star li {
                display:inline-block; vertical-align:middle; margin:0 6px; cursor:pointer
            }

            .first-rating__rating--success {
                display:none
            }

            .first-rating__rating--success p {
                margin-top:10px
            }

            .first-rating__rating--success p:first-child {
                color:#666; font-weight:bold; font-size:16px; line-height:22px
            }

            .first-rating__rating--success .rating-product__star__container {
                display:flex; align-items:center; margin-top:15px
            }

            .first-rating__rating--success .rating-product__star {
                display:inline-block; margin:0
            }

            .first-rating__rating--success .rating-product__star li {
                cursor:default
            }

            .first-rating__rating--success .rating-product__star li:first-child {
                margin:0 6px 0 0
            }

            .first-rating__rating--success span {
                font-size:16px
            }

            .first-rating__rating--success span::before {
                content:"•"; margin-right:10px
            }

            .comment-btn__item i {
                margin-right:10px
            }

            .comment-btn__item.right-arrow span::before {
                border-bottom:5px solid transparent; border-top:5px solid transparent; border-left:5px solid #2f80ed; content:''; position:absolute; top:3px; right:-15px
            }

            .comment-btn__item.right-arrow span {
                position:relative
            }

            .box-cmt-popup {
                display:block; overflow:hidden; padding:12px 0
            }

            .box-cmt-popup .info-pro {
                display:flex; overflow:hidden; align-items:center
            }

            .box-cmt-popup .info-pro .img-cmt {
                width:65px; height:65px; margin:0 19px 0 0; display:flex; align-items:center
            }

            .box-cmt-popup .info-pro .img-cmt img {
                width:100%
            }

            .box-cmt-popup .info-pro .text-pro {
                display:block; overflow:hidden; width:calc(100% - 84px)
            }

            .box-cmt-popup .info-pro .text-pro h3 {
                color:#000; display:-webkit-box; -webkit-box-orient:vertical; overflow:hidden; text-overflow:ellipsis; -webkit-line-clamp:2
            }

            .box-cmt-popup .info-pro .text-pro small {
                display:block; overflow:hidden; padding:3px 0 0; font-size:13px; line-height:17px; color:#666
            }

            .box-cmt-popup ul li {
                display:inline-block; vertical-align:top; margin:0 5px 0 0; width:7%
            }

            .box-cmt-popup ul li span {
                display:block; overflow:hidden; font-size:11px; line-height:13px; color:#666; padding:5px 0 0
            }

            .ul-orslt, .read-assess-form {
                display:none
            }

            .rt-success-popup {
                background-color:#fff; border-radius:8px; left:50%; position:fixed; top:50%; transform:translate(-50%, -50%); z-index:13; text-align:center; padding:20px 15px; width:365px
            }

            .rt-success-popup__title {
                font-weight:bold
            }

            .rt-success-popup__content {
                margin-top:20px
            }

            .rt-success-popup__close {
                margin-top:20px; border:1px solid #333; background:unset; border-radius:8px; padding:10px 60px; cursor:pointer
            }

            .rt-success-popup__refer {
                margin-top:20px; font-size:11px; color:#878787
            }

            .rt-success-popup__refer a {
                color:#4195eb
            }

            .inputrating__group {
                position:relative; margin-bottom:15px
            }

            .txtcount__box {
                right:10px; position:absolute; bottom:7px; color:#666; bottom:-13px
            }

            .bg-ellipse {
                background:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/homev2/desk/bg-ellipse-tgdd.png) top no-repeat; position:absolute; background-size:contain; top:40px; left:0; right:0; z-index:-1; height:100vw
            }

            .box-scroll {
                overflow:unset; white-space:normal
            }

            .readmore-txt {
                font-size:12px; line-height:16px; position:relative; padding-right:8px
            }

            .readmore-txt.blue {
                color:#2f80ed
            }

            .readmore-txt:before {
                content:''; height:5px; position:absolute; transform:rotate(45deg); right:0; top:5px; width:5px
            }

            .readmore-txt.blue:before {
                border-top:1px solid #2f80ed; border-right:1px solid #2f80ed
            }

            .prd-promo__title {
                height:150px
            }

            .prd-promo__title img {
                width:100%
            }

            .prd-promo__top.clearfix {
                margin:0 auto 10px
            }

            .prd-another .item {
                background-color:#fff; border-radius:4px; margin:0 5px
            }

            .prd-another .banner-prd-promo {
                display:block; overflow:hidden; padding:0 18px
            }

            .prd-another .banner-prd-promo {
                display:flex; justify-content:space-between
            }

            .prd-another .banner-prd-promo a {
                display:inline-block; vertical-align:middle; width:380px; margin-right:12px
            }

            .prd-another .banner-prd-promo a img {
                display:block; width:100%
            }

            .prd-another .banner-prd-promo a:last-child {
                margin-right:0
            }

            .prd-another .home-slider {
                width:calc(100% - 20px); margin:0 auto 15px
            }

            .prd-promo .slide-prd {
                display:block; margin:12px 0 0; padding:0
            }

            .prd-promo .slide-prd li {
                height:430px; border-radius:4px; overflow:hidden
            }

            .prd-promo .slide-prd.listproduct .owl-item {
                border:0
            }

            .prd-promo .listproduct {
                padding:0 10px
            }

            .prd-promo .listproduct .owl-item:first-child {
                border:0
            }

            .prd-promo .listproduct .item-img, .listproduct .item-img {
                display:flex; align-items:center
            }

            .another-slider .item {
                border-radius:14px
            }

            .prd-promo .listproduct .item-img, .prd-another .listproduct .item-img, .listproduct .item-img {
                height:220px; line-height:220px
            }

            .slide-prd .owl-nav {
                position:absolute; top:38%; width:100%
            }

            .slide-prd .owl-nav button span {
                font-size:0
            }

            .slide-prd .owl-nav button {
                position:absolute; left:-17px; height:90px; width:45px; background:rgba(255, 255, 255, .8) !important; box-shadow:0 4px 4px rgba(0, 0, 0, .25); border-radius:0 4px 4px 0 !important
            }

            .slide-prd .owl-nav button.owl-next {
                border-radius:4px 0 0 4px !important; right:-17px; left:unset
            }

            .slide-prd .owl-nav button:after {
                content:''; position:absolute; border-top:3px solid #666; border-left:3px solid #666; height:15px; width:15px; right:10px; top:36px; transform:rotate(-45deg)
            }

            .slide-prd .owl-nav button.owl-next:after {
                transform:rotate(135deg)
            }

            .box-common {
                padding:15px 0 10px
            }

            .box-common__title {
                font-size:16px; font-weight:bold; line-height:16px; padding:0 10px
            }

            .box-common__link a {
                border:1px solid #e0e0e0; border-radius:16px; color:#333; display:inline-block; font-size:13px; line-height:10px; margin-left:10px; padding:10px 11px
            }

            .box-common__link a:first-child {
                margin-left:0
            }

            .box-common .readmore-btn {
                margin-top:10px
            }

            .box-common-listbtn {
                display:flex; margin-top:10px; padding:0 5px
            }

            .box-common-listbtn .readmore-btn {
                align-items:center; display:flex; justify-content:center; margin:0 5px; width:calc(50% - 10px)
            }

            .box-common .listproduct {
                margin-top:10px
            }

            .col2-tech {
                display:flex; align-items:stretch; margin:0 0 30px
            }

            .tech-new {
                float:left; width:895px; overflow:hidden; background:#fff; margin-right:20px; border-radius:12px
            }

            .tech-new ul {
                display:flex; overflow:hidden; justify-content:space-between; align-items:center; padding:15px 18px
            }

            .tech-new ul li {
                float:left; overflow:hidden; vertical-align:middle; width:33%; margin-right:10px
            }

            .tech-new ul li:last-child {
                margin-right:0
            }

            .tech-new ul li a {
                display:block; overflow:hidden
            }

            .tech-new ul li img {
                display:block; width:100%; border-radius:8px; height:auto
            }

            .tech-new ul li span {
                display:block; overflow:hidden; -webkit-line-clamp:2; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical; font-size:16px; line-height:26px; color:#333; margin:10px 0
            }

            .hideCompare .item-compare {
                display:none
            }

            .bannertopzone-home {
                display:block; overflow:hidden; margin:10px auto
            }

            .bannertopzone-home img {
                display:block; overflow:hidden; width:100%; height:auto
            }
            /* khung màu sản phẩm  */
            .product.discount.product_filter {
    border: 3px ridge #00ff62;
    display: inline-block;
    padding: 6px;
    
    /* background: #000000; */
    /* color: white; */
}
    </style>
    <div class="f1-effect">

        <div class="f1-effect-flower">
        </div>

        <div class="f1-effect-flower">
        </div>

        <div class="f1-effect-flower">
        </div>

        <div class="f1-effect-flower">
        </div>

        <div class="f1-effect-flower">
        </div>

        <div class="f1-effect-flower">
        </div>

        <div class="f1-effect-flower">
        </div>

        <div class="f1-effect-flower">
        </div>

        <div class="f1-effect-flower">
        </div>

        <div class="f1-effect-flower">
        </div>

    </div>


    {{-- hiệu ứng hoa rơi --}}
    <style>
        .f1-effect {
            position: relative;
            z-index: 99999999;
        }

        .f1-effect .f1-effect-flower {
            opacity: 1;
            border-radius: 100%;
            background: url(https://file.hstatic.net/200000259653/file/pages_17a8568517e94dcd9c8aec5587_570924d1fa4b4da1aa011044c9d7cc1c.png);
            position: fixed;
            top: -10%;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: default;
            -webkit-animation-name: snowflakes-fall, snowflakes-shake;
            -webkit-animation-duration: 10s, 3s;
            -webkit-animation-timing-function: linear, ease-in-out;
            -webkit-animation-iteration-count: infinite, infinite;
            -webkit-animation-play-state: running, running;
            animation-name: snowflakes-fall, snowflakes-shake;
            animation-duration: 10s, 3s;
            animation-timing-function: linear, ease-in-out;
            animation-iteration-count: infinite, infinite;
            animation-play-state: running, running;
        }

        @media (max-width: 767px) {
            .f1-effect .f1-effect-flower:nth-of-type(2n) {
                display: none;
            }
        }

        .f1-effect .f1-effect-flower:nth-of-type(0) {
            left: 5%;
            -webkit-animation-delay: 1s, 1s;
            animation-delay: 1s, 1s;
            width: 16px;
            height: 16px;
            background-position: 0 -23px;
        }

        .f1-effect .f1-effect-flower:nth-of-type(1) {
            left: 10%;
            -webkit-animation-delay: 6s, 0.5s;
            animation-delay: 6s, 0.5s;
            width: 13px;
            height: 13px;
            background-position: 0 -50px;
        }

        .f1-effect .f1-effect-flower:nth-of-type(2) {
            left: 20%;
            -webkit-animation-delay: 4s, 2s;
            animation-delay: 4s, 2s;
            width: 15px;
            height: 15px;
            background-position: -49px -35px;
        }

        .f1-effect .f1-effect-flower:nth-of-type(3) {
            left: 30%;
            -webkit-animation-delay: 2s, 2s;
            animation-delay: 2s, 2s;
            width: 14px;
            height: 14px;
            background-position: -31px 0;
        }

        .f1-effect .f1-effect-flower:nth-of-type(4) {
            left: 40%;
            -webkit-animation-delay: 8s, 3s;
            animation-delay: 8s, 3s;
            width: 16px;
            height: 16px;
            background-position: 0 -23px;
        }

        .f1-effect .f1-effect-flower:nth-of-type(5) {
            left: 50%;
            -webkit-animation-delay: 6s, 2s;
            animation-delay: 6s, 2s;
            width: 13px;
            height: 13px;
            background-position: 0 -50px;
        }

        .f1-effect .f1-effect-flower:nth-of-type(6) {
            left: 60%;
            -webkit-animation-delay: 2.5s, 1s;
            animation-delay: 2.5s, 1s;
            width: 15px;
            height: 15px;
            background-position: -49px -35px;
        }

        .f1-effect .f1-effect-flower:nth-of-type(7) {
            left: 70%;
            -webkit-animation-delay: 1s, 0s;
            animation-delay: 1s, 0s;
            width: 14px;
            height: 14px;
            background-position: -31px 0;
        }

        .f1-effect .f1-effect-flower:nth-of-type(8) {
            left: 80%;
            -webkit-animation-delay: 2s, 2s;
            animation-delay: 2s, 2s;
            width: 14px;
            height: 14px;
            background-position: -31px 0;
        }

        .f1-effect .f1-effect-flower:nth-of-type(9) {
            left: 90%;
            -webkit-animation-delay: 8s, 3s;
            animation-delay: 8s, 3s;
            width: 16px;
            height: 16px;
            background-position: 0 -23px;
        }

        .f1-effect .f1-effect-flower:nth-of-type(10) {
            left: 95%;
            -webkit-animation-delay: 6s, 2s;
            animation-delay: 6s, 2s;
            width: 13px;
            height: 13px;
            background-position: 0 -50px;
        }

        @-webkit-keyframes snowflakes-fall {
            0% {
                top: -10%;
            }

            100% {
                top: 100%;
            }
        }

        @-webkit-keyframes snowflakes-shake {
            0% {
                -webkit-transform: translateX(0px);
                transform: translateX(0px);
            }

            50% {
                -webkit-transform: translateX(80px);
                transform: translateX(80px);
            }

            100% {
                -webkit-transform: translateX(0px);
                transform: translateX(0px);
            }
        }

        @keyframes snowflakes-fall {
            0% {
                top: -10%;
            }

            100% {
                top: 100%;
            }
        }

        @keyframes snowflakes-shake {
            0% {
                transform: translateX(0px);
            }

            50% {
                transform: translateX(80px);
            }

            100% {
                transform: translateX(0px);
            }
        }
    </style>

</head>

<body>

    <div class="super_container"> <br>

        <!-- Header -->

        @include('shop.includes.header');

        {{-- tiêu đề trên ảnh bìa --}}
        <div class="banner-topzone">
            <a aria-label="slide" data-cate="0" data-place="2219" href="https://www.topzone.vn/khuyen-mai-hot"
                onclick="jQuery.ajax({ url: '/bannertracking?bid=67347&r='+ (new Date).getTime(), async: true, cache: false });"><img
                    width='1920px' height='60px' loading="lazy" class="lazyload"
                    data-src="//cdn.tgdd.vn/2022/12/banner/Desk-1200x100.webp"
                    alt="Banner Promote 100 Shop Topzone Desktop"></a>
        </div>
    </div>
{{-- ảnh  --}}
    <div class="big-banner">
        <a aria-label="slide" data-cate="0" data-place="1998" href="https://www.thegioididong.com/mua-online-gia-re" onclick="jQuery.ajax({ url: '/bannertracking?bid=55886&r='+ (new Date).getTime(), async: true, cache: false });"><img width='1920' height='920'  src="//cdn.tgdd.vn/2022/12/banner/TGDDDESK-1920x450.webp" alt="Banner Big Campaign"  ></a>
    </div>
    
    {{-- tiêu đề dưới ảnh bìa --}}
    <div class="header-top-bar">
        <div class="banner-media">
            <div class="media-slider" data-size="3">
                <div class="nav">
                    <div class="prev">
                        <div class="arrow-left"></div>
                    </div>
                    <div class="next">
                        <div class="arrow-right"></div>
                    </div>
                </div>
                <div class="item" data-background-color="#b2060b" data-order="1">
                    <a aria-label="slide" data-cate="0" data-place="1612"
                        href="https://www.thegioididong.com/mua-online-gia-re"
                        onclick="jQuery.ajax({ url: '/bannertracking?bid=67439&r='+ (new Date).getTime(), async: true, cache: false });"><img
                            width='1200' height='44' src="//cdn.tgdd.vn/2022/12/banner/1200-44-1200x44-10.webp"
                            alt="big tết"></a>
                </div>
            </div>
            <style>
                .banner-media {
                    background-color: #b2060b;
                }
            </style>

        </div>
    </div>


    {{-- Sản phẩm --}}
    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h1>Sản phẩm</h1>
                    </div>
                </div><br>
            </div>
            <div class="row align-items-center">

                 {{-- //tìm kiếm  --}}
                <form action=""class="header__search">
                    <input class="input-search" name="product" placeholder="Tìm sản phẩm">
                    <button type="submit">
                        <i class="icon-search"></i>
                    </button>
                </form>

                <div class="col text-center">
                    <ul class="">
                        <a href="{{route('shop.index')}}"><li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked">Liên quan</li></a>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                            data-filter=".women">Mới nhất</li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                            data-filter=".accessories">Bán chạy</li>
                    </ul>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <label for="amount">Sắp xếp theo</label>
                        <form action="">
                            @csrf
                            <select name="sort" id="sort" class="form-control">
                                <option value="{{Request::url()}}?sort_by=none">--Lọc--</option>
                                <option value="{{Request::url()}}?sort_by=tang_dan">--Giá tăng dần</option>
                                <option value="{{Request::url()}}?sort_by=giam_dan">--Giá giảm dần--</option>
                                <option value="{{Request::url()}}?sort_by=kytu_az">A đến Z</option>
                                <option value="{{Request::url()}}?sort_by=kytu_za">Z đến A</option>

                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-grid"
                        data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

                        <!-- Product 1 -->
                        @foreach ($products as $product)
                            <div class="product-item men">
                                <div class="product discount product_filter">
                                    <div class="product_image">
                                        <img src="{{ asset('admin/uploads/' . $product->image) }}" alt=""
                                            width="180px" height="180px">
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div
                                        class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                        <span>-$20</span></div>
                                    <div class="product_info">
                                        <h6 class="product_name "><a
                                                href="" >{{ $product->name }}</a>
                                        </h6>
                                        <div class="product_price">{{ number_format($product->price) }}
                                            VNĐ<span></span></div> <br>
                                        <div class="view">
                                            <a target="_blank" href="{{route('showsanpham',$product->id)}}">Chi tiết</a>
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="red_button add_to_cart_button"><a href="{{route('add-to-cart',$product->id)}}">Giỏ
                                        hàng</a></div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <style>
            form.header__search {
                margin: 10px 10px 10px 110px;
            }
        </style>
    </div> <br><br>

    {{-- tiêu đề dưới sản phẩm --}}
    <div class="banner-topzone">
        <a aria-label="slide" data-cate="0" data-place="" href="https://www.topzone.vn/khuyen-mai-hot"
            onclick="jQuery.ajax({ url: '/bannertracking?bid=67347&r='+ (new Date).getTime(), async: true, cache: false });"><img
                width='1500px' height='100' loading="lazy" class="lazyload"
                data-src="//cdn.tgdd.vn/2022/12/banner/Desk-1200x100.webp"
                alt="Banner Promote 100 Shop Topzone Desktop"></a>
    </div>

    </div>
    <!-- Footer -->
    @include('shop.includes.footer')

    </div>

    <script src="{{ asset('shop/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('shop/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('shop/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('shop/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('shop/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('shop/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('shop/js/custom.js') }}"></script>


    <script type="text/javascript">
    $(document).ready(function(){
        $('#sort').on('change', function(){
            var url = $(this).val( );
            // alert(url)
            if(url){
                window.location = url;
            }
            return false;
        });
    });

    </script>
</body>

</html>

