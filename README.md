# xrDebug (PHP based server)

This is the _original_ xrDebug server written in pure PHP. You may want to check the newer implementation at [xrdebug/xrdebug](https://github.com/xrdebug/xrdebug).

Use this project if you want to bundle xrDebug in your based PHP project, just like [Chevereto](https://chevereto.com/).

<a href="https://xrdebug.com"><img alt="xrDebug" src="app/src/icon.svg" width="40%"></a>

[![Build](https://img.shields.io/github/actions/workflow/status/xrdebug/xrdebug-php/test.yml?branch=2.0&style=flat-square)](https://github.com/xrdebug/xrdebug-php/actions)
![Code size](https://img.shields.io/github/languages/code-size/xrdebug/xrdebug-php?style=flat-square)
[![Apache-2.0](https://img.shields.io/github/license/xrdebug/xrdebug-php?style=flat-square)](LICENSE)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%209-blueviolet?style=flat-square)](https://phpstan.org/)
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat-square&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fxrdebug%2Fxrdebug%2F2.0)](https://dashboard.stryker-mutator.io/reports/github.com/xrdebug/xrdebug-php/2.0)

[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=xrdebug_xrdebug-php&metric=alert_status)](https://sonarcloud.io/dashboard?id=xrdebug_xrdebug-php)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=xrdebug_xrdebug-php&metric=sqale_rating)](https://sonarcloud.io/dashboard?id=xrdebug_xrdebug-php)
[![Reliability Rating](https://sonarcloud.io/api/project_badges/measure?project=xrdebug_xrdebug-php&metric=reliability_rating)](https://sonarcloud.io/dashboard?id=xrdebug_xrdebug-php)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=xrdebug_xrdebug-php&metric=security_rating)](https://sonarcloud.io/dashboard?id=xrdebug_xrdebug-php)
[![Coverage](https://sonarcloud.io/api/project_badges/measure?project=xrdebug_xrdebug-php&metric=coverage)](https://sonarcloud.io/dashboard?id=xrdebug_xrdebug-php)
[![Technical Debt](https://sonarcloud.io/api/project_badges/measure?project=xrdebug_xrdebug-php&metric=sqale_index)](https://sonarcloud.io/dashboard?id=xrdebug_xrdebug-php)
[![CodeFactor](https://www.codefactor.io/repository/github/xrdebug/xrdebug-php/badge)](https://www.codefactor.io/repository/github/xrdebug/xrdebug-php)

## Installation

```sh
composer require xrdebug/xrdebug
```

<p align="center">
    <img alt="xrDebug light" src=".screen/xrdebug-1.1.0-splash-light.png">
</p>
<p>
    <img alt="xrDebug dark" src=".screen/xrdebug-1.1.0-splash-dark.png">
</p>

## Documentation

Documentation available at [docs.xrdebug.com](https://docs.xrdebug.com/).

## Features

* Ephemeral, it doesn't store any persistent data
* Signed requests (Ed25519)
* End-to-end encryption (AES-GCM AE)
* Filter messages by Topics and Emotes
* Resume, Pause, Stop and Clear debug window controls
* Keyboard shortcuts (Resume **R**, Pause **P**, Stop **S** and Clear **C**)
* Re-name "xrDebug" session to anything you want
* Export dump output to clipboard or as PNG image
* Pause and resume your code execution
* Dark / Light mode follows your system preferences
* Portable & HTML based (save page, search, etc.)
* Uses [FiraCode](https://github.com/tonsky/FiraCode) font for displaying _beautiful looking dumps_ ™
* Open with editor links
* Responsive user interface

<p align="center">
    <img alt="xrDebug light demo" src=".screen/xrdebug-1.1.0-demo-dark.png">
</p>

<p align="center">
    <img alt="xrDebug dark demo" src=".screen/xrdebug-1.1.0-demo-light.png">
</p>

## PHP Features

* Configuration via code and `xr.php` file
* Dump arguments using [VarDump](https://chevere.org/packages/var-dump.html)
* Generates dump backtrace
* Custom inspectors
* Handle errors and exceptions (hook or replace your existing handler)

## License

Copyright [Rodolfo Berrios A.](https://rodolfoberrios.com/)

xrDebug is licensed under the Apache License, Version 2.0. See [LICENSE](LICENSE) for the full license text.

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
