<style>
    .cookie-consent-banner {
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 2147483645;
        box-sizing: border-box;
        width: 100%;

        background-color: #f9f3ff;
    }

    .cookie-consent-banner__inner {
        max-width: 960px;
        margin: 0 auto;
        padding: 32px 0;
    }

    .cookie-consent-banner__copy {
        margin-bottom: 16px;
    }

    .cookie-consent-banner__actions {}

    .cookie-consent-banner__header {
        margin-bottom: 8px;

        font-family: "CeraPRO-Bold", sans-serif, arial;
        font-weight: normal;
        font-size: 16px;
        line-height: 24px;
    }

    .cookie-consent-banner__description {
        font-family: "CeraPRO-Regular", sans-serif, arial;
        font-weight: normal;
        color: #838F93;
        font-size: 16px;
        line-height: 24px;
    }

    .cookie-consent-banner__cta {
        box-sizing: border-box;
        display: inline-block;
        min-width: 164px;
        padding: 11px 13px;

        border-radius: 2px;

        background-color: #ff6661;

        color: #FFF;
        text-decoration: none;
        text-align: center;
        font-family: "CeraPRO-Regular", sans-serif, arial;
        font-weight: normal;
        font-size: 16px;
        line-height: 20px;
    }

    .cookie-consent-banner__cta--secondary {
        padding: 9px 13px;

        border: 2px solid #3A4649;

        background-color: transparent;

        color: #ff6661;
    }

    .cookie-consent-banner__cta:hover {
        background-color: #ff6661;
    }

    .cookie-consent-banner__cta--secondary:hover {
        border-color: #838F93;

        background-color: transparent;

        color: #ff6661;
    }

    .cookie-consent-banner__cta:last-child {
        margin-left: 16px;
    }
</style>
@if ($cookieConsentConfig['enabled'] && !$alreadyConsentedWithCookies)
    @include('cookie-consent::dialogContents')

    <script>
        window.laravelCookieConsent = (function() {

            const COOKIE_VALUE = 1;
            const COOKIE_DOMAIN = '{{ config('session.domain') ?? request()->getHost() }}';

            function consentWithCookies() {
                setCookie('{{ $cookieConsentConfig['cookie_name'] }}', COOKIE_VALUE,
                    {{ $cookieConsentConfig['cookie_lifetime'] }});
                hideCookieDialog();
            }

            function consentWithCookiesDecline() {
                hideCookieDialog();
            }

            function cookieExists(name) {
                return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
            }

            function hideCookieDialog() {
                const dialogs = document.getElementsByClassName('js-cookie-consent');

                for (let i = 0; i < dialogs.length; ++i) {
                    dialogs[i].style.display = 'none';
                }
            }

            function setCookie(name, value, expirationInDays) {
                const date = new Date();
                date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                document.cookie = name + '=' + value +
                    ';expires=' + date.toUTCString() +
                    ';domain=' + COOKIE_DOMAIN +
                    ';path=/{{ config('session.secure') ? ';secure' : null }}' +
                    '{{ config('session.same_site') ? ';samesite=' . config('session.same_site') : null }}';
            }

            if (cookieExists('{{ $cookieConsentConfig['cookie_name'] }}')) {
                hideCookieDialog();
            }

            const buttons = document.getElementsByClassName('js-cookie-consent-agree');
            const declineButtons = document.getElementsByClassName('js-cookie-consent-decline');

            for (let i = 0; i < buttons.length; ++i) {
                buttons[i].addEventListener('click', consentWithCookies);
            }

            for (let i = 0; i < buttons.length; ++i) {
                declineButtons[i].addEventListener('click', consentWithCookiesDecline);
            }

            return {
                consentWithCookies: consentWithCookies,
                hideCookieDialog: hideCookieDialog
            };
        })();
    </script>
@endif
