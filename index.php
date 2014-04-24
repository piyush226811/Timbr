

<!doctype html>
<html ng-app="Source" id="checkout-two">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# video: http://ogp.me/ns/video#">
<meta charset="utf-8">
<title>Timbr Transaction: Sample App</title>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="shortcut icon" href="//source.r.worldssl.net/static/r-c207cff/images/favicon.png">

<script src="//source.r.worldssl.net/static/r-c207cff/js/libs/jquery-2.0.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js"></script>
<script>window.angular || document.write('<script src="//source.r.worldssl.net/static/r-c207cff/js/libs/angular.min.js"><\/script>')</script>

<script src="//source.r.worldssl.net/static/r-c207cff/js/libs/angular-cookies.min.js"></script>
<script src="//source.r.worldssl.net/static/r-c207cff/js/libs/angular-sanitize.min.js"></script>
<link rel="stylesheet" href="//source.r.worldssl.net/static/r-c207cff/2.0/css/main.css">
<script type="text/javascript" src="//use.typekit.net/wql2mdh.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<meta name="description" content="Source profile guarantees you easy and unlimited access to the downloads, offers you best available deals, lates updates and announces brand-new timesaving products.">
<meta name="author" content="abdoc">
<meta name="viewport" content="width=1000">

<meta property="og:title" content="Made by Source">
<meta property="og:description" content="Source profile guarantees you easy and unlimited access to the downloads, offers you best available deals, lates updates and announces brand-new timesaving products.">
<meta property="og:image" content="https://source.r.worldssl.net/static/r-c207cff/images/social-academy.png">
<meta property="og:type" content="product">
<meta property="og:url" content="http://madebysource.com/">
<meta property="og:site_name" content="Subtle Patterns Photoshop Plugin">
<meta property="og:email" content="team@madebysource.com">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@madebysource">
<meta name="twitter:creator" content="@madebysource">
<meta name="twitter:url" content="http://madebysource.com/">
<meta name="twitter:title" content="Made by Source">
<meta name="twitter:description" content="Source profile guarantees you easy and unlimited access to the downloads, offers you best available deals, lates updates and announces brand-new timesaving products.">
<meta name="twitter:image" content="https://source.r.worldssl.net/static/r-c207cff/images/social-academy.png">


	





</head>
<body ng-cloak class="" >
	<div id="topbar">
		<div class="container group">
			<div id="logo">
				<a href="/">
					<img src="logo.png" alt="Timbr App">
				</a>
			</div>
			<nav>
				<ul>
					
					
					<li>
						<a href="#" ng-class="{join: !user}" ng-bind="user.email || 'Sample App'">Sample App</a>
					</li>
					
					
				</ul>
			</nav>
		</div>
	</div>
	
<section id="checkout" class="container" ng-controller="Checkout" ng-init="offers=[{&quot;description&quot;: &quot;Photoshop plugin which instantly turns layer styles to CSS3! Speed-up your Photoshop workflow.&quot;, &quot;price&quot;: &quot;34.99&quot;, &quot;old_price&quot;: null, &quot;limit&quot;: null, &quot;products&quot;: [1], &quot;id&quot;: 5, &quot;name&quot;: &quot;Sample Product&quot;}, {&quot;description&quot;: &quot;Feeling mighty today? Get this bundle of Subtle Patterns Photoshop plugin, the best exporter of images PNG Hat and layer styles translator CSS Hat and you can compete even against Chuck Norris!&quot;, &quot;price&quot;: &quot;89.99&quot;, &quot;old_price&quot;: &quot;116.96&quot;, &quot;limit&quot;: null, &quot;products&quot;: [1, 3, 5, 6, -2], &quot;id&quot;: 4, &quot;name&quot;: &quot;Chuck Norris Backpack&quot;}];promo_code=&quot;&quot;;promo_code_error=null;redeemed_by_me=false;STATIC_URL = '//source.r.worldssl.net/static/r-c207cff/';multilicense_options={&quot;10&quot;: 0.15, &quot;2&quot;: 0.05, &quot;3&quot;: 0.06, &quot;5&quot;: 0.1, &quot;15&quot;: 0.2};saved_card=null" ng-cloak>
<section id="offers" ng-show="view == 'offers'" class="group">
    <ul class="offers">
        
        <li ng-class="{ active: offerType == 'personal' }" ng-click="offerType = 'personal'" ng-focus="offerType = 'personal'" tabindex="1">
            <div class="image">
                <ul ng-show="oldPrice || promo_code">
                    <li class="show">Normal price: <del >${{oldPrice || price}}</del></li>
                    <li class="show" ng-if="promo_code && !oldPrice">Discount: <del >{{ (promo_code.action.sale_amount * 100).toFixed(0) }}%</del></li>
                    <li class="show" ng-if="oldPrice">Discount: <del >{{ ((1 - offer.price / oldPrice) * 100).toFixed(0) }}%</del></li>
                </ul>
                <img ng-src="//source.r.worldssl.net/static/r-c207cff/images/redeem/{{offer.id}}.png" width="216" height="216">
            </div>
            <strong>{{offer.name}}</strong>
            <span>${{offer.price}} for one</span>
            <i class="radio"></i>
        </li>
        <li ng-class="{ active: offerType == 'team' }" ng-click="offerType = 'team'" ng-focus="offerType = 'team'" tabindex="2">
            <div class="image">
                <ul>
                    <li class="show">Normal price: <del >${{ oldPrice || price }}</del></li>
                    <li class="show" ng-if="!oldPrice">Discount: <del >{{ ((1 - ((offer.price * (1 - saveDiscountLicences[saveLicenceNumber])).toFixed(2) / price )).toFixed(2) * 100).toFixed(0) }}%</del></li>
                    <li class="show" ng-if="oldPrice">Discount: <del>{{ ((1 - ((offer.price * (1 - saveDiscountLicences[saveLicenceNumber])) / oldPrice )).toFixed(2) * 100).toFixed(0) }}%</del></li>
                </ul>
                <img ng-src="//source.r.worldssl.net/static/r-c207cff/images/redeem/{{offer.id}}-team.png" width="216" height="216">
            </div>
            <strong>{{offer.name}} for teams</strong>
            <span>${{ (offer.price * (1 - saveDiscountLicences[saveLicenceNumber])).toFixed(2) }} per item</span>
            <i class="radio"></i>
        </li>
        
    </ul>

    <hr>

    <div class="total">
        <div ng-show="offerType == 'team'" class="licences">
            <span>Quantity:</span>
            <div class="count-container">
                <select name="count" tabindex="3" id="count" ng-model="licenceNumber" ng-options="value as value for (key, value) in multilicense_options|orderObjectBy:'key'">
                </select>
            </div>
            <div class="like-select">
                <span ng-bind="licenceNumber"></span>
            </div>
        </div>
        
        <span class="summary" ng-hide="offerType == 'team'">{{ licenceNumber }} × {{ offer.name }}</span>
        
        <span>Total:</span>
        <strong animated-value="licenceNumber * (offer.price * (1 - discountLicences[licenceNumber]))"></strong>
    </div>

    <hr class="clear">

    <div class="group clear margin-top">
        <a href="javascript:;" ng-click="individualOffer()" class="teams" tabindex="-1">Deals for corporations and non-profit.</a>
        <button class="green buy" ng-click="view = 'paymentMethods'" tabindex="4">Continue</button>
    </div>
</section>


<section id="method" ng-show="view == 'paymentMethods'">
    <ul class="methods group">
        <li ng-click="selectMethod('card')" ng-class="{ active: selectedMethod=='card' }">
            <span>Credit Card</span>
        </li>
        <li ng-click="selectMethod('paypal')" ng-class="{ active: selectedMethod =='paypal' }">Paypal</li>
        <li ng-click="selectMethod('bitcoin')" ng-class="{ active: selectedMethod =='bitcoin' }">Bitcoin</li>
    </ul>

    <form novalidate name="paymentMethodsForm">
        <fieldset class="card" ng-class="{ active: selectedMethod =='card' }">
            
            <div ng-class="{ invalid: (emailValidity === false), valid: (emailValidity === true)}">
                <label for="card-email" ng-show="!customer.exists">Cardholder Name</label>
                <label for="card-email" ng-show="!customer.logged && customer.exists">Existing account. <a href="javascript:;" ng-click="view = 'login'">Login</a> for easy as pie purchase.</label>
                <input type="text" name="Name" id="card-email" tabindex="5" email="checkIfExists" ng-model="cardEmail" placeholder="e.g. Piyush" required ng-disabled="user.email">
            </div>
            <h1 ng-bind="paymentEmail"></h1>
            <ul class="card group">
                <li>
                    <div ng-class="{invalid: (cardValidity === false), valid: (cardValidity === true), filled: (user.card.keep_saved && userUseSavedCard) }">
                        <label for="card">Card number</label>
                        <input type="text" name="card" id="card" tabindex="6"  placeholder="1234 5678 1234 5678" pattern="\d*" autocompletetype="cc-number" required card="card" ng-model="card" ng-disabled="keepSaved">
                        <div>**** **** **** <span>{{ last4 }}</span></div>
                    </div>
                </li>
                <li>
                    <div ng-class="{invalid: (expValidity === false), valid: (expValidity === true)}">
                        <label for="exp">Exp. date</label>
                        <input type="text" name="exp" id="exp" tabindex="7" validity-model="expValidity" placeholder="MM/YY" pattern="\d*" autocompletetype="cc-exp" required card="expdate" ng-model="expdate" ng-disabled="keepSaved">
                    </div>
                </li>
                <li>
                    <div ng-class="{invalid: (cvcValidity === false), valid: (cvcValidity === true), filled: (user.card.keep_saved && userUseSavedCard) }">
                        <label for="cvc">CVC</label> <i class="help"></i><div class="tooltip">CVC is the last three or four digits in the signature area on the back of your card.</div>
                        <input type="text" name="cvc" id="cvc" tabindex="8" validity-model="cvcValidity" placeholder="123" autocompletetype="cc-csc" required card="cvc" ng-model="cvc" ng-disabled="keepSaved">
                    </div>
                </li>
            </ul>
            <span class="different-card" ng-show="user && user.card && !differentCardClicked" ng-click="differentCard()"><b>Pay by another card</b></span>
            <span class="paywithsavedcard" ng-show="user && user.card && differentCardClicked" ng-click="useSavedCard()"><b>Pay by saved card instead</b></span>
            <span class="checkbox checked" ng-click="saveCard = !saveCard" ng-hide="user.card && !differentCardClicked"><b>Remember this card</b></span>
            <!-- end -->
            
        </fieldset>
    </form>

    <fieldset class="paypal" ng-class="{ active: selectedMethod == 'paypal' }">
        <p class="message">You will be redirected to <b>PayPal.com</b>.</p>
    </fieldset>

    <fieldset class="bitcoin" ng-class="{ active: selectedMethod == 'bitcoin' }">
        <p class="message">You will be redirected to <b>Coinbase.com</b>.</p>
    </fieldset>

    <div class="summary group">
        
        <span class="summary-licences">{{ licenceNumber }} × {{ offer.name }}</span>
        
        <aside class="total">
            <span>Total:</span> <strong ng-bind="licenceNumber * (offer.price * (1 - discountLicences[licenceNumber]))|currency"></strong>
        </aside>
    </div>
    <hr class="clear">

    <div class="group clear margin-top pay-container">
        <a href="javascript:;" class="back" tabindex="-1" ng-click="view = 'offers'">Change your order</a>

      
        <button type="submit"  class="green buy" tabindex="9" onclick="window.location.href='process.php'">Pay now</button>
    </div>

    <div class="errors" error-hover="errorsActive" ng-class="(errorsActive == 'payment') && 'active'">
        <h2>An error occurred</h2>
        <p ng-bind-html="errorMessage"></p>
    </div>
</section>



<section id="teams" ng-show="view == 'individualInjury'">
    <div class="inner-container">
        <h2>Individual inquiry</h2>
        <p class="info">We have special offers too. Pick one of the three categories below, leave us your e-mail and we will contact you.</p>
    </div>
    <ul>
        <li ng-class="{ active: individualInquiry == 'company' }" ng-click="individualInquiry = 'company'">
            <strong>Commercial</strong>
            <p>- Premium support</p>
            <p>- Multi-licence offer</p>
        </li>
        <li ng-class="{ active: individualInquiry == 'academy' }" ng-click="individualInquiry = 'academy'">
            <strong>Education</strong>
            <p>- Special deal for educational purposes</p>
        </li>
    </ul>
    <div class="inner-container">
        <form name="individualEmailForm">
            <fieldset>
                <div ng-class="(individualEmailValidity == false) && 'invalid'">
                    <label for="teams-email">Leave your e-mail here, we’ll get back to you.</label>
                    <input type="email" name="email" id="teams-email" ng-model="individualEmail" email validity-model="individualEmailValidity" placeholder="e.g. jamescole@example.com" required>
                </div>
            </fieldset>
        </form>
        <div class="margin-top">
            <a href="javascript:;" ng-click="standardOffer()" tabindex="-1" class="back">Back to order</a>
            <button class="green" ng-class="{ disabled: individualEmailValidity == false}" send-data-event="individualOffer" send-data="{'#teams-email' : { model: 'individualEmail', validate: 'email', validityModel: 'individualEmailValidity'}}">Send</button>
        </div>
    </div>
    <div class="errors" error-hover="errorsActive" ng-class="errorsActive == 'individual' && 'active'">
        <h2>Sending error</h2>
        <p>Some error occurred, try it again or contact us directly to <a href="mailto:team@madebysource.com">team@madebysource.com</a>.</p>
    </div>
</section>

<section id="confirm" ng-show="view == 'confirm'">
    <h2 ng-bind="confirmHeader"></h2>
    <p class="download" ng-bind-html="confirmMessage"></p>
    <p ng-bind="confirmClaim"></p>
    <div ng-hide="promo_code_error">
        <a href="javascript:;" class="profile" ng-click="confirmButton()" ng-bind="confirmButtonText">Open profile</a>
        <p class="nice-claim"><span ng-bind="confirmSubClaim"></span>. <strong>Made by Source.</strong></p>
    </div>
    <a href="javascript:;" ng-click="view = 'offers'" class="back" ng-show="promo_code_error" tabindex="-1">Back to order</a>
</section>

</section>


    <footer>
        <div class="container group">
            <div class="agreement">Copyright © 2014 Timbr <a href="#" style="font-weight: bold;">Terms &amp; Policies</a>.</div>
        </div>
    </footer>
	<a id="support-link" href="#">Need help?</a>

	

<script src="//source.r.worldssl.net/static/r-c207cff/js/libs/jquery.payment.js"></script>

	<script src="//source.r.worldssl.net/static/r-c207cff/js/app.min.js"></script>
	
	

