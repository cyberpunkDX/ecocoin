<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->


<!-- Mirrored from demo.goodlayers.com/greennature/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Jun 2025 16:32:08 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />

    <link rel="pingback" href="xmlrpc.html" />
    <title>{{ config('app.name') }} &#8211; Just another WordPress site</title>
    <meta name='robots' content='noindex, nofollow' />
    <style>
        img:is([sizes="auto" i],
        [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel="alternate" type="application/rss+xml" title="{{ config('app.name') }} &raquo; Feed"
        href="https://demo.goodlayers.com/greennature/feed/" />
    <link rel="alternate" type="application/rss+xml" title="{{ config('app.name') }} &raquo; Comments Feed"
        href="https://demo.goodlayers.com/greennature/comments/feed/" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.1.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.1.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/demo.goodlayers.com\/greennature\/wp-includes\/js\/wp-emoji-release.min.js?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\ud83d\udd25", "\ud83d\udc26\u200b\ud83d\udd25")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://demo.goodlayers.com/greennature/wp-includes/css/dist/block-library/style.min.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <link rel='stylesheet' id='woocommerce-add-to-cart-form-style-css'
        href='https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/client/blocks/woocommerce/add-to-cart-form-style.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <style id='woocommerce-product-button-style-inline-css' type='text/css'>
        .wp-block-button.wc-block-components-product-button {
            align-items: center;
            display: flex;
            flex-direction: column;
            gap: 12px;
            justify-content: center;
            white-space: normal;
            word-break: break-word
        }

        .wp-block-button.wc-block-components-product-button.is-style-outline .wp-block-button__link {
            border: 2px solid
        }

        .wp-block-button.wc-block-components-product-button.is-style-outline .wp-block-button__link:not(.has-text-color) {
            color: currentColor
        }

        .wp-block-button.wc-block-components-product-button.is-style-outline .wp-block-button__link:not(.has-background) {
            background-color: transparent;
            background-image: none
        }

        .wp-block-button.wc-block-components-product-button.has-custom-width .wp-block-button__link {
            box-sizing: border-box
        }

        .wp-block-button.wc-block-components-product-button.wp-block-button__width-25 .wp-block-button__link {
            width: 25%
        }

        .wp-block-button.wc-block-components-product-button.wp-block-button__width-50 .wp-block-button__link {
            width: 50%
        }

        .wp-block-button.wc-block-components-product-button.wp-block-button__width-75 .wp-block-button__link {
            width: 75%
        }

        .wp-block-button.wc-block-components-product-button.wp-block-button__width-100 .wp-block-button__link {
            width: 100%
        }

        .wp-block-button.wc-block-components-product-button .wp-block-button__link {
            display: inline-flex;
            font-size: 1em;
            justify-content: center;
            text-align: center;
            white-space: normal;
            width: auto;
            word-break: break-word
        }

        .wp-block-button.wc-block-components-product-button a[hidden] {
            display: none
        }

        @keyframes slideOut {
            0% {
                transform: translateY(0)
            }

            to {
                transform: translateY(-100%)
            }
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(90%)
            }

            to {
                opacity: 1;
                transform: translate(0)
            }
        }

        .wp-block-button.wc-block-components-product-button.align-left {
            align-items: flex-start
        }

        .wp-block-button.wc-block-components-product-button.align-right {
            align-items: flex-end
        }

        .wp-block-button.wc-block-components-product-button .wc-block-components-product-button__button {
            align-items: center;
            border-style: none;
            display: inline-flex;
            justify-content: center;
            line-height: inherit;
            overflow: hidden;
            white-space: normal;
            word-break: break-word
        }

        .wp-block-button.wc-block-components-product-button .wc-block-components-product-button__button span.wc-block-slide-out {
            animation: slideOut .1s linear 1 normal forwards
        }

        .wp-block-button.wc-block-components-product-button .wc-block-components-product-button__button span.wc-block-slide-in {
            animation: slideIn .1s linear 1 normal
        }

        .wp-block-button.wc-block-components-product-button .wc-block-components-product-button__button--placeholder {
            background-color: currentColor !important;
            border: 0 !important;
            border-radius: .25rem;
            box-shadow: none;
            color: currentColor !important;
            display: block;
            line-height: 1;
            max-width: 100% !important;
            min-height: 3em;
            min-width: 8em;
            opacity: .15;
            outline: 0 !important;
            overflow: hidden !important;
            pointer-events: none;
            position: relative !important;
            width: 100%;
            z-index: 1
        }

        .wp-block-button.wc-block-components-product-button .wc-block-components-product-button__button--placeholder>* {
            visibility: hidden
        }

        .wp-block-button.wc-block-components-product-button .wc-block-components-product-button__button--placeholder:after {
            animation: loading__animation 1.5s ease-in-out infinite;
            background-image: linear-gradient(90deg, currentColor, hsla(0, 0%, 96%, .302), currentColor);
            background-repeat: no-repeat;
            content: " ";
            display: block;
            height: 100%;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transform: translateX(-100%)
        }

        @keyframes loading__animation {
            to {
                transform: translateX(100%)
            }
        }

        @media screen and (prefers-reduced-motion:reduce) {
            .wp-block-button.wc-block-components-product-button .wc-block-components-product-button__button--placeholder {
                animation: none
            }
        }

        .wc-block-all-products .wp-block-button.wc-block-components-product-button {
            margin-bottom: 12px
        }

        .theme-twentytwentyone .editor-styles-wrapper .wc-block-components-product-button .wp-block-button__link {
            background-color: var(--button--color-background);
            border-color: var(--button--color-background);
            color: var(--button--color-text)
        }
    </style>
    <style id='woocommerce-product-collection-style-inline-css' type='text/css'>
        .wp-block-woocommerce-product-collection .wc-block-components-product-stock-indicator {
            text-align: center
        }

        .wc-block-components-notice-banner .wc-block-components-button.wc-block-components-notice-banner__dismiss[hidden] {
            display: none
        }
    </style>
    <style id='woocommerce-product-filters-style-inline-css' type='text/css'>
        :where(.wc-block-product-filters) {
            --top-padding: var(--wp-admin--admin-bar--height);
            display: inline-flex
        }

        @media(max-width:782px) {
            :where(.wc-block-product-filters) {
                --top-padding: var(--adminbar-mobile-padding, 0)
            }
        }

        :where(.wc-block-product-filters) .wc-block-product-filters__close-overlay,
        :where(.wc-block-product-filters) .wc-block-product-filters__open-overlay {
            align-items: center;
            background: transparent;
            border: transparent;
            color: inherit;
            display: flex;
            font-size: .875em;
            padding: 0
        }

        :where(.wc-block-product-filters) .wc-block-product-filters__close-overlay svg,
        :where(.wc-block-product-filters) .wc-block-product-filters__open-overlay svg {
            fill: currentColor
        }

        :where(.wc-block-product-filters) .wc-block-product-filters__close-overlay span,
        :where(.wc-block-product-filters) .wc-block-product-filters__open-overlay span {
            padding: 0 5px
        }

        :where(.wc-block-product-filters) .wc-block-product-filters__open-overlay svg {
            height: var(--wc-product-filters-overlay-icon-size, 1.5em);
            width: var(--wc-product-filters-overlay-icon-size, 1.5em)
        }

        :where(.wc-block-product-filters) .wc-block-product-filters__overlay {
            background-color: transparent;
            inset: 0;
            pointer-events: none;
            position: fixed;
            top: var(--top-padding);
            transition: background-color .5s;
            z-index: 9999
        }

        :where(.wc-block-product-filters) .wc-block-product-filters__overlay-wrapper {
            height: 100%;
            position: relative;
            width: 100%
        }

        :where(.wc-block-product-filters) .wc-block-product-filters__overlay-dialog {
            background-color: var(--wc-product-filters-overlay-background-color, var(--wc-product-filters-background-color, var(--wp--preset--color--base, #fff)));
            color: var(--wc-product-filters-overlay-text-color, var(--wc-product-filters-text-color, var(--wp--preset--color--base, #111)));
            display: flex !important;
            flex-direction: column;
            gap: var(--wp--preset--spacing--40);
            inset: 0;
            max-height: 100%;
            position: absolute;
            transform: translateY(100vh);
            transition: none
        }

        :where(.wc-block-product-filters) .wc-block-product-filters__overlay-header {
            display: flex;
            flex-flow: row-reverse;
            padding: var(--wp--preset--spacing--30) var(--wp--preset--spacing--40) 0
        }

        :where(.wc-block-product-filters) .wc-block-product-filters__overlay-content {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            gap: var(--wc-product-filter-block-spacing, var(--wp--style--block-gap, 1.2rem));
            overflow-y: scroll;
            padding: 0 var(--wp--preset--spacing--40)
        }

        :where(.wc-block-product-filters) .wc-block-product-filters__overlay-content>:first-child {
            margin-top: 0
        }

        :where(.wc-block-product-filters) .wc-block-product-filters__overlay-footer {
            box-shadow: 0 -4px 8px 0 rgba(0, 0, 0, .102);
            padding: var(--wp--preset--spacing--30) var(--wp--preset--spacing--40)
        }

        :where(.wc-block-product-filters) .wc-block-product-filters__apply {
            width: 100%
        }

        :where(.wc-block-product-filters).is-overlay-opened .wc-block-product-filters__overlay {
            background-color: rgba(95, 95, 95, .35);
            pointer-events: auto;
            z-index: 9999
        }

        :where(.wc-block-product-filters).is-overlay-opened .wc-block-product-filters__overlay-dialog {
            color: var(--wc-product-filters-overlay-color, inherit);
            transform: translateY(0);
            transition: transform .5s
        }

        @media(min-width:601px) {

            :where(.wc-block-product-filters),
            :where(.wc-block-product-filters).is-overlay-opened {
                display: flex
            }

            :where(.wc-block-product-filters) .wc-block-product-filters__open-overlay,
            :where(.wc-block-product-filters) .wc-block-product-filters__overlay-footer,
            :where(.wc-block-product-filters) .wc-block-product-filters__overlay-header,
            :where(.wc-block-product-filters).is-overlay-opened .wc-block-product-filters__open-overlay,
            :where(.wc-block-product-filters).is-overlay-opened .wc-block-product-filters__overlay-footer,
            :where(.wc-block-product-filters).is-overlay-opened .wc-block-product-filters__overlay-header {
                display: none
            }

            :where(.wc-block-product-filters) .wc-block-product-filters__overlay,
            :where(.wc-block-product-filters).is-overlay-opened .wc-block-product-filters__overlay {
                background: inherit;
                color: inherit;
                inset: 0;
                pointer-events: auto;
                position: relative;
                transition: none
            }

            :where(.wc-block-product-filters) .wc-block-product-filters__overlay-wrapper,
            :where(.wc-block-product-filters).is-overlay-opened .wc-block-product-filters__overlay-wrapper {
                background: inherit;
                color: inherit;
                height: auto;
                width: auto
            }

            :where(.wc-block-product-filters) .wc-block-product-filters__overlay-dialog,
            :where(.wc-block-product-filters).is-overlay-opened .wc-block-product-filters__overlay-dialog {
                background: inherit;
                color: inherit;
                position: relative;
                transform: none
            }

            :where(.wc-block-product-filters) .wc-block-product-filters__overlay-content,
            :where(.wc-block-product-filters).is-overlay-opened .wc-block-product-filters__overlay-content {
                background: inherit;
                color: inherit;
                flex-grow: 1;
                overflow: visible;
                padding: 0
            }
        }

        @media(max-width:600px) {
            :where(.wc-block-product-filters) .wc-block-product-filters__overlay-content .wp-block-group {
                display: block
            }

            :where(.wc-block-product-filters) .wc-block-product-filters__overlay-content .wp-block-group>div {
                margin: 20px 0
            }
        }

        .wc-block-product-filter--hidden {
            display: none
        }
    </style>
    <link rel='stylesheet' id='woocommerce-product-filter-price-slider-style-css'
        href='https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/client/blocks/woocommerce/product-filter-price-slider-style.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <style id='woocommerce-product-filter-removable-chips-style-inline-css' type='text/css'>
        .wc-block-product-filter-removable-chips.is-vertical .wc-block-product-filter-removable-chips__items {
            flex-direction: column
        }

        .wc-block-product-filter-removable-chips.is-content-justification-center .wc-block-product-filter-removable-chips__items {
            justify-content: center
        }

        .wc-block-product-filter-removable-chips.is-content-justification-right .wc-block-product-filter-removable-chips__items {
            justify-content: flex-end
        }

        .wc-block-product-filter-removable-chips.is-content-justification-space-between .wc-block-product-filter-removable-chips__items {
            justify-content: space-between
        }

        .wc-block-product-filter-removable-chips.is-horizontal .wc-block-product-filter-removable-chips__items {
            width: 100%
        }

        .wc-block-product-filter-removable-chips__items {
            color: var(--wc-product-filter-removable-chips-text, currentColor);
            display: inline-flex;
            flex-wrap: wrap;
            gap: 4px;
            list-style: none;
            margin: 0;
            padding: 0
        }

        .wc-block-product-filter-removable-chips__items .wc-block-product-filter-removable-chips__item {
            align-items: center;
            appearance: none;
            background: var(--wc-product-filter-removable-chips-background, transparent);
            border: 1px solid var(--wc-product-filter-removable-chips-border, color-mix(in srgb, currentColor 20%, transparent));
            border-radius: 2px;
            display: flex;
            font-size: .875em;
            gap: 8px;
            justify-content: space-between;
            padding: .25em .75em
        }

        .wc-block-product-filter-removable-chips__items .wc-block-product-filter-removable-chips__item .wc-block-product-filter-removable-chips__remove {
            align-items: center;
            background-color: transparent;
            border: none;
            color: var(--wc-product-filter-removable-chips-text, currentColor);
            cursor: pointer;
            display: flex;
            margin: 0;
            padding: 0
        }

        .wc-block-product-filter-removable-chips__items .wc-block-product-filter-removable-chips__item .wc-block-product-filter-removable-chips__remove .wc-block-product-filter-removable-chips__remove-icon {
            fill: currentColor
        }
    </style>
    <style id='woocommerce-product-filter-checkbox-list-style-inline-css' type='text/css'>
        .wc-block-product-filter-checkbox-list__list {
            list-style: none outside;
            margin: 0;
            padding: 0
        }

        .wc-block-product-filter-checkbox-list__label {
            align-items: center;
            display: inline-flex;
            gap: .625em
        }

        .wc-block-product-filter-checkbox-list__item .wc-block-product-filter-checkbox-list__label {
            margin-bottom: 0
        }

        :where(.wc-block-product-filter-checkbox-list__input-wrapper) {
            display: block;
            position: relative
        }

        .wc-block-product-filter-checkbox-list__input-wrapper:before {
            background: currentColor;
            border-radius: 2px;
            content: "";
            height: 1em;
            left: 0;
            opacity: .1;
            pointer-events: none;
            position: absolute;
            top: 0;
            width: 1em
        }

        .has-option-element-color .wc-block-product-filter-checkbox-list__input-wrapper:before {
            display: none
        }

        input[type=checkbox].wc-block-product-filter-checkbox-list__input {
            appearance: none;
            background: var(--wc-product-filter-checkbox-list-option-element, transparent);
            border: 1px solid var(--wc-product-filter-checkbox-list-option-element-border, transparent);
            border-radius: 2px;
            color: inherit;
            cursor: pointer;
            display: block;
            font-size: inherit;
            height: 1em;
            margin: 0;
            width: 1em
        }

        input[type=checkbox].wc-block-product-filter-checkbox-list__input:focus {
            outline-color: var(--wc-product-filter-checkbox-list-option-element-border, currentColor);
            outline-width: 1px
        }

        svg.wc-block-product-filter-checkbox-list__mark {
            box-sizing: border-box;
            color: var(--wc-product-filter-checkbox-list-option-element-selected, currentColor);
            display: none;
            height: 1em;
            left: 0;
            padding: .2em;
            position: absolute;
            top: 0;
            width: 1em
        }

        input[type=checkbox].wc-block-product-filter-checkbox-list__input:checked:after,
        input[type=checkbox].wc-block-product-filter-checkbox-list__input:checked:before {
            content: none
        }

        input[type=checkbox].wc-block-product-filter-checkbox-list__input:checked+.wc-block-product-filter-checkbox-list__mark {
            display: block;
            pointer-events: none
        }

        :where(.wc-block-product-filter-checkbox-list__text-wrapper) {
            align-items: center;
            display: inline-flex;
            font-size: .875em;
            gap: 4px
        }

        .wc-block-product-filter-checkbox-list__show-more {
            appearance: none;
            background: transparent;
            border: none;
            font-family: inherit;
            padding: 0;
            text-decoration: underline
        }
    </style>
    <style id='woocommerce-product-filter-chips-style-inline-css' type='text/css'>
        :where(.wc-block-product-filter-chips__items) {
            display: flex;
            flex-wrap: wrap;
            gap: 4px
        }

        .wc-block-product-filter-chips__item {
            appearance: none;
            background: transparent;
            border: 1px solid color-mix(in srgb, currentColor 20%, transparent);
            border-radius: 2px;
            color: var(--wc-product-filter-chips-text, currentColor);
            cursor: pointer;
            font-family: inherit;
            font-size: .875em;
            padding: 4px 8px
        }

        .has-chip-text-color .wc-block-product-filter-chips__item {
            color: var(--wc-product-filter-chips-text)
        }

        .has-chip-background-color .wc-block-product-filter-chips__item {
            background: var(--wc-product-filter-chips-background)
        }

        .has-chip-border-color .wc-block-product-filter-chips__item {
            border-color: var(--wc-product-filter-chips-border)
        }

        .wc-block-product-filter-chips__item[aria-checked=true] {
            background: currentColor
        }

        .has-selected-chip-text-color .wc-block-product-filter-chips__item[aria-checked=true] {
            color: var(--wc-product-filter-chips-selected-text)
        }

        .has-selected-chip-background-color .wc-block-product-filter-chips__item[aria-checked=true] {
            background: var(--wc-product-filter-chips-selected-background)
        }

        .has-selected-chip-border-color .wc-block-product-filter-chips__item[aria-checked=true] {
            border-color: var(--wc-product-filter-chips-selected-border)
        }

        :where(.wc-block-product-filter-chips__label) {
            align-items: center;
            display: inline-flex;
            gap: 4px
        }

        .wc-block-product-filter-chips:not(.has-selected-chip-text-color) .wc-block-product-filter-chips__item[aria-checked=true]>.wc-block-product-filter-chips__label {
            filter: invert(100%)
        }

        .wc-block-product-filter-chips__show-more {
            appearance: none;
            background: transparent;
            border: none;
            font-family: inherit;
            padding: 0;
            text-decoration: underline
        }
    </style>
    <link rel='stylesheet' id='woocommerce-product-gallery-style-css'
        href='https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/client/blocks/woocommerce/product-gallery-style.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <style id='woocommerce-product-template-style-inline-css' type='text/css'>
        .wc-block-product-template {
            list-style: none;
            margin-bottom: 0;
            margin-top: 0;
            max-width: 100%;
            padding: 0
        }

        .wc-block-product-template.wc-block-product-template {
            background: none
        }

        .wc-block-product-template.is-flex-container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 1.25em
        }

        .wc-block-product-template.is-flex-container>li {
            list-style: none;
            margin: 0;
            width: 100%
        }

        @media(min-width:600px) {
            .wc-block-product-template.is-flex-container.is-flex-container.columns-2>li {
                width: calc(50% - .625em)
            }

            .wc-block-product-template.is-flex-container.is-flex-container.columns-3>li {
                width: calc(33.33333% - .83333em)
            }

            .wc-block-product-template.is-flex-container.is-flex-container.columns-4>li {
                width: calc(25% - .9375em)
            }

            .wc-block-product-template.is-flex-container.is-flex-container.columns-5>li {
                width: calc(20% - 1em)
            }

            .wc-block-product-template.is-flex-container.is-flex-container.columns-6>li {
                width: calc(16.66667% - 1.04167em)
            }
        }

        .wc-block-product-template__responsive {
            grid-gap: 1.25em;
            display: grid
        }

        .wc-block-product-template__responsive.columns-2 {
            grid-template-columns: repeat(auto-fill, minmax(max(150px, calc(50% - .625em)), 1fr))
        }

        .wc-block-product-template__responsive.columns-3 {
            grid-template-columns: repeat(auto-fill, minmax(max(150px, calc(33.33333% - .83333em)), 1fr))
        }

        .wc-block-product-template__responsive.columns-4 {
            grid-template-columns: repeat(auto-fill, minmax(max(150px, calc(25% - .9375em)), 1fr))
        }

        .wc-block-product-template__responsive.columns-5 {
            grid-template-columns: repeat(auto-fill, minmax(max(150px, calc(20% - 1em)), 1fr))
        }

        .wc-block-product-template__responsive.columns-6 {
            grid-template-columns: repeat(auto-fill, minmax(max(150px, calc(16.66667% - 1.04167em)), 1fr))
        }

        .wc-block-product-template__responsive>li {
            margin-block-start: 0
        }

        :where(.wc-block-product-template .wc-block-product)>:not(:last-child) {
            margin-bottom: .75rem;
            margin-top: 0
        }

        .is-product-collection-layout-list .wc-block-product:not(:last-child) {
            margin-bottom: 1.2rem
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='titan-adminbar-styles-css'
        href='https://demo.goodlayers.com/greennature/wp-content/plugins/anti-spam/assets/css/admin-bar.css?ver=7.3.8'
        type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://demo.goodlayers.com/greennature/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=6.0.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=9.9.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=9.9.3'
        type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=9.9.3'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='brands-styles-css'
        href='https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/css/brands.css?ver=9.9.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='style-css'
        href='https://demo.goodlayers.com/greennature/wp-content/themes/greennature/style.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='Lato-google-font-css'
        href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='Noto-Sans-google-font-css'
        href='https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='Merriweather-google-font-css'
        href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='Mystery-Quest-google-font-css'
        href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='superfish-css'
        href='https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/superfish/css/superfish.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='dlmenu-css'
        href='https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/dl-menu/component.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'
        href='https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/font-awesome-new/css/font-awesome.min.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elegant-font-css'
        href='https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/elegant-font/style.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-fancybox-css'
        href='https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/fancybox/jquery.fancybox.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='greennature-flexslider-css'
        href='https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/flexslider/flexslider.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='style-responsive-css'
        href='https://demo.goodlayers.com/greennature/wp-content/themes/greennature/stylesheet/style-responsive.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='style-custom-css'
        href='https://demo.goodlayers.com/greennature/wp-content/themes/greennature/stylesheet/style-custom.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='greennature-woo-style-css'
        href='https://demo.goodlayers.com/greennature/wp-content/themes/greennature/stylesheet/gdlr-woocommerce.css?ver=89905ffeb2fc0d0abb9d7c9f2ca2f2cd'
        type='text/css' media='all' />
    <link rel='stylesheet' id='newsletter-css'
        href='https://demo.goodlayers.com/greennature/wp-content/plugins/newsletter/style.css?ver=8.9.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ms-main-css'
        href='https://demo.goodlayers.com/greennature/wp-content/plugins/masterslider/public/assets/css/masterslider.main.css?ver=3.7.8'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ms-custom-css'
        href='https://demo.goodlayers.com/greennature/wp-content/uploads/masterslider/custom.css?ver=6.2'
        type='text/css' media='all' />
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js">
    </script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.9.9.3"
        id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/greennature\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/greennature\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/demo.goodlayers.com\/greennature\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.9.3"
        id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.9.3"
        id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/greennature\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/greennature\/?wc-ajax=%%endpoint%%",
            "i18n_password_show": "Show password",
            "i18n_password_hide": "Hide password"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.9.3"
        id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <link rel="https://api.w.org/" href="https://demo.goodlayers.com/greennature/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json"
        href="https://demo.goodlayers.com/greennature/wp-json/wp/v2/pages/5680" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://demo.goodlayers.com/greennature/xmlrpc.php?rsd" />

    <link rel="canonical" href="https://demo.goodlayers.com/greennature/" />
    <link rel='shortlink' href='https://demo.goodlayers.com/greennature/' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://demo.goodlayers.com/greennature/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.goodlayers.com%2Fgreennature%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://demo.goodlayers.com/greennature/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.goodlayers.com%2Fgreennature%2F&amp;format=xml" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L3G23KN8XC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-L3G23KN8XC');
    </script>
    <script>
        var ms_grabbing_curosr =
            'https://demo.goodlayers.com/greennature/wp-content/plugins/masterslider/public/assets/css/common/grabbing.cur',
            ms_grab_curosr =
            'https://demo.goodlayers.com/greennature/wp-content/plugins/masterslider/public/assets/css/common/grab.cur';
    </script>
    <meta name="generator" content="MasterSlider 3.7.8 - Responsive Touch Image Slider" />
    <script type="text/javascript">
        (function(url) {
            if (/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)) {
                return;
            }
            var addEvent = function(evt, handler) {
                if (window.addEventListener) {
                    document.addEventListener(evt, handler, false);
                } else if (window.attachEvent) {
                    document.attachEvent('on' + evt, handler);
                }
            };
            var removeEvent = function(evt, handler) {
                if (window.removeEventListener) {
                    document.removeEventListener(evt, handler, false);
                } else if (window.detachEvent) {
                    document.detachEvent('on' + evt, handler);
                }
            };
            var evts =
                'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'
                .split(' ');
            var logHuman = function() {
                if (window.wfLogHumanRan) {
                    return;
                }
                window.wfLogHumanRan = true;
                var wfscr = document.createElement('script');
                wfscr.type = 'text/javascript';
                wfscr.async = true;
                wfscr.src = url + '&r=' + Math.random();
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(
                    wfscr);
                for (var i = 0; i < evts.length; i++) {
                    removeEvent(evts[i], logHuman);
                }
            };
            for (var i = 0; i < evts.length; i++) {
                addEvent(evts[i], logHuman);
            }
        })('http://demo.goodlayers.com/greennature/?wordfence_lh=1&amp;hid=431F8854182F183B23188EADA3F5327B');
    </script><!-- load the script for older ie version -->
    <!--[if lt IE 9]>
<script src="https://demo.goodlayers.com/greennature/wp-content/themes/greennature/javascript/html5.js"
    type="text/javascript"></script>
<script src="https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/easy-pie-chart/excanvas.js"
    type="text/javascript"></script>
<![endif]-->
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <style type="text/css">
        .broken_link,
        a.broken_link {
            text-decoration: line-through;
        }
    </style>
</head>

<body data-rsssl=1
    class="home wp-singular page-template-default page page-id-5680 wp-theme-greennature theme-greennature _masterslider _msp_version_3.7.8 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="/">
        @include('layouts.header')
        <!-- is search -->
        <div class="content-wrapper">
            <div class="greennature-content">
                <!-- Above Sidebar Section-->
                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    @yield('content')
                </div>
                <!-- Below Sidebar Section-->
            </div><!-- greennature-content -->
            <div class="clear"></div>
        </div>
        <!-- content wrapper -->
        @include('layouts.footer')

        
    </div> <!-- body-wrapper -->
    
</script>
    <style>
        footer[data-wpr-lazyrender] {
            content-visibility: visible !important;
        }
    </style>
    <script type="text/javascript"></script>
    <script type='text/javascript'>
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=wc-9.9.3'
        type='text/css' media='all' />
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6"
        id="wp-hooks-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6"
        id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.0.6"
        id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-before">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/demo.goodlayers.com\/greennature\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/plugins/contact-form-7/includes/js/index.js?ver=6.0.6"
        id="contact-form-7-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/superfish/js/superfish.js?ver=1.0"
        id="superfish-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-includes/js/hoverIntent.min.js?ver=1.10.2" id="hoverIntent-js">
    </script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/dl-menu/modernizr.custom.js?ver=1.0"
        id="modernizr-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/dl-menu/jquery.dlmenu.js?ver=1.0"
        id="dlmenu-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/jquery.easing.js?ver=1.0"
        id="jquery-easing-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/fancybox/jquery.fancybox.pack.js?ver=1.0"
        id="jquery-fancybox-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/fancybox/helpers/jquery.fancybox-media.js?ver=1.0"
        id="jquery-fancybox-media-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/fancybox/helpers/jquery.fancybox-thumbs.js?ver=1.0"
        id="jquery-fancybox-thumbs-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/flexslider/jquery.flexslider.js?ver=1.0"
        id="greennature-flexslider-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/jquery.isotope.min.js?ver=1.0"
        id="isotope-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/themes/greennature/javascript/gdlr-script.js?ver=1.0"
        id="greennature-script-js"></script>
    <script type="text/javascript" id="newsletter-js-extra">
        /* <![CDATA[ */
        var newsletter_data = {
            "action_url": "https:\/\/demo.goodlayers.com\/greennature\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/plugins/newsletter/main.js?ver=8.9.0" id="newsletter-js">
    </script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=9.9.3"
        id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0000000000000000818030539140313095458623138256371021270751953125e-5,
                "session": 30,
                "base64": false,
                "ajaxurl": "https:\/\/demo.goodlayers.com\/greennature\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": true
            },
            "fields": {
                "source_type": "current.typ",
                "referrer": "current_add.rf",
                "utm_campaign": "current.cmp",
                "utm_source": "current.src",
                "utm_medium": "current.mdm",
                "utm_content": "current.cnt",
                "utm_id": "current.id",
                "utm_term": "current.trm",
                "utm_source_platform": "current.plt",
                "utm_creative_format": "current.fmt",
                "utm_marketing_tactic": "current.tct",
                "session_entry": "current_add.ep",
                "session_start_time": "current_add.fd",
                "session_pages": "session.pgs",
                "session_count": "udata.vst",
                "user_agent": "udata.uag"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=9.9.3"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/plugins/masterslider/public/assets/js/masterslider.min.js?ver=3.7.8"
        id="masterslider-core-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6-wc.9.9.3"
        id="prettyPhoto-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/themes/greennature/plugins/jquery.transit.min.js?ver=1.0"
        id="jquery.transit-js"></script>
    <script type="text/javascript"
        src="https://demo.goodlayers.com/greennature/wp-content/plugins/gdlr-portfolio/gdlr-portfolio-script.js?ver=1.0"
        id="portfolio-script-js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"952ca906ef8ebd3a","version":"2025.6.2","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"9247582a97cd45c0b9f0c15195583f49","b":1}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demo.goodlayers.com/greennature/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Jun 2025 16:32:08 GMT -->

</html>
