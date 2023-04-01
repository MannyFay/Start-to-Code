#!/bin/sh
browser-sync start --proxy "webserver:80" --files "/app/**/*" --no-open --host "0.0.0.0"


