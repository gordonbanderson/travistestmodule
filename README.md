# SilverStripe Module Travis Test
[![Build Status](https://travis-ci.org/gordonbanderson/travistestmodule.svg?branch=master)](https://travis-ci.org/gordonbanderson/travistestmodule)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gordonbanderson/travistestmodule/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/travistestmodule/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/gordonbanderson/travistestmodule/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/travistestmodule/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/gordonbanderson/travistestmodule/badges/build.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/travistestmodule/build-status/master)
[![codecov.io](https://codecov.io/github/gordonbanderson/travistestmodule/coverage.svg?branch=master)](https://codecov.io/github/gordonbanderson/travistestmodule?branch=master)

![codecov.io](https://codecov.io/github/gordonbanderson/travistestmodule/branch.svg?branch=master)

## Running Tests With SilverStripe 4.1
I ran into problems running tests with SilverStripe 4.1, so I reduced it down to a minimal case in order to repeat and
then resolve the issues.  This is a meaningless module functionality wise, it's purposes is to provide an example for
others so they don't headbang like I did.

### Gotchas
* An obvious one in hindsight, but your module must pull in the framework either directly or indirectly
* The version of PHP Unit needs to be pinned in requires-dev, to version `^5.7`, newer versions cause autoloading issues that prevent SapphireTest
class from being found (the initial reason I wrote this module). ```"phpunit/phpunit": "^5.7",```
* With 4.1, one needs to use `--prefer-source` instead of `--prefer-dist`, otherwise test classes do not get downloaded.
They are now removed from distributions to reduce install size.  See https://github.com/silverstripe/silverstripe-framework/issues/7845



## Credits

- [Gordon Anderson][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

