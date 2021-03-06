# Change Log

All notable changes to this project will be documented in this file.

This projects adheres to [Semantic Versioning](http://semver.org/) and [Keep a CHANGELOG](http://keepachangelog.com/).

## [Unreleased][unreleased]
-

## [2.1.0] - 2020-03-19
- Fixed "$result is always a sub-type of Icepay_Result".
- Extend from AbstractGatewayIntegration class.

## [2.0.6] - 2019-12-22
- Added URL to manual in gateway settings.
- Fixed processing ICEPAY postback.
- Updated usage of deprecated `get_cents()` method.

## [2.0.5] - 2019-10-04
- Added support for Klarna (Directebank) payment method.
- Update ICEPAY library version from 2.4.0 to 2.5.3.

## [2.0.4] - 2019-08-27
- Updated packages.

## [2.0.3] - 2019-05-15
- Set country from billing address.

## [2.0.2] - 2019-01-24
- Improved setting required country and language.

## [2.0.1] - 2018-12-12
- Fixed "Fatal error: Uncaught Exception: MerchantID not valid" in test meta box.
- Use issuer field from core gateway.
- Updated deprecated function calls.

## [2.0.0] - 2018-05-09
- Switched to PHP namespaces.

## [1.3.1] - 2017-12-12
- Set payment success and error return URLs.

## [1.3.0] - 2017-02-08
- Added order ID setting.

## [1.2.9] - 2016-10-20
- Added support for new Bancontact constant.

## [1.2.8] - 2016-06-08
- Simplified the gateay payment start function.

## [1.2.7] - 2016-03-22
- Added product URL.
- Updated gateway settings.

## [1.2.6] - 2016-03-02
- Fixed fatal error in case of ICEPAY merchants that not have the iDEAL payment method activated.
- Added get settings function.

## [1.2.5] - 2016-02-01
- Added an gateway settings class.

## [1.2.4] - 2015-10-19
- Fixed fatal error with wrong constant usage.

## [1.2.3] - 2015-10-19
- Only return the iDEAL issuers field if the payment method is iDEAL.

## [1.2.2] - 2015-10-14
- Make sure to use language and country values from payment data object.

## [1.2.1] - 2015-03-03
- Changed WordPress pay core library requirment from `~1.0.0` to `>=1.0.0`.

## [1.2.0] - 2015-02-16
- Added support for multiple payment methods.

## [1.1.0] - 2015-02-16
- Require the icepay/icepay library version 2.4.0.
- Improved the ICEPAY listener condition.

## 1.0.0 - 2015-01-19
- First release.

[unreleased]: https://github.com/wp-pay-gateways/icepay/compare/2.1.0...HEAD
[2.1.0]: https://github.com/wp-pay-gateways/icepay/compare/2.0.6...2.1.0
[2.0.6]: https://github.com/wp-pay-gateways/icepay/compare/2.0.5...2.0.6
[2.0.5]: https://github.com/wp-pay-gateways/icepay/compare/2.0.4...2.0.5
[2.0.4]: https://github.com/wp-pay-gateways/icepay/compare/2.0.3...2.0.4
[2.0.3]: https://github.com/wp-pay-gateways/icepay/compare/2.0.2...2.0.3
[2.0.2]: https://github.com/wp-pay-gateways/icepay/compare/2.0.1...2.0.2
[2.0.1]: https://github.com/wp-pay-gateways/icepay/compare/2.0.0...2.0.1
[2.0.0]: https://github.com/wp-pay-gateways/icepay/compare/1.3.1...2.0.0
[1.3.1]: https://github.com/wp-pay-gateways/icepay/compare/1.3.0...1.3.1
[1.3.0]: https://github.com/wp-pay-gateways/icepay/compare/1.2.9...1.3.0
[1.2.9]: https://github.com/wp-pay-gateways/icepay/compare/1.2.8...1.2.9
[1.2.8]: https://github.com/wp-pay-gateways/icepay/compare/1.2.7...1.2.8
[1.2.7]: https://github.com/wp-pay-gateways/icepay/compare/1.2.6...1.2.7
[1.2.6]: https://github.com/wp-pay-gateways/icepay/compare/1.2.5...1.2.6
[1.2.5]: https://github.com/wp-pay-gateways/icepay/compare/1.2.4...1.2.5
[1.2.4]: https://github.com/wp-pay-gateways/icepay/compare/1.2.3...1.2.4
[1.2.3]: https://github.com/wp-pay-gateways/icepay/compare/1.2.2...1.2.3
[1.2.2]: https://github.com/wp-pay-gateways/icepay/compare/1.2.1...1.2.2
[1.2.1]: https://github.com/wp-pay-gateways/icepay/compare/1.2.0...1.2.1
[1.2.0]: https://github.com/wp-pay-gateways/icepay/compare/1.1.0...1.2.0
[1.1.0]: https://github.com/wp-pay-gateways/icepay/compare/1.0.0...1.1.0
