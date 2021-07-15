# Skywire Logging

Adds extra information to all log entries

Currently adds

* Request remote IP
* Request method and URL, e.g `GET /customer/account/login`

## Installation

`composer require skywire/m2-logging`

## Usage

Once installed and enabled log entries should contain additional data at the end of each entry (monolog defines this as the 'extra' section)