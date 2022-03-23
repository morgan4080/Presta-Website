#!/bin/sh
set -e

git push origin master

(git push) || true

git checkout production

git merge master

git push origin production

git checkout master
