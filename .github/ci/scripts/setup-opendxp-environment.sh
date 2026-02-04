#!/bin/bash

set -eu

cp -r .github/ci/files/config config
cp -r .github/ci/files/templates templates
cp -r .github/ci/files/bin bin
cp -r .github/ci/files/kernel kernel
cp .github/ci/files/.env ./
cp -r .github/ci/files/var var

chmod 755 bin/console
