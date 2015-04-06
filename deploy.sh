#! /bin/sh

here=`dirname $0`
theme="$here/theme"
dest="techtangents@samplesurgeon.com:/home/techtangents/public_html/blog/wp-content/themes/techtangents-theme"

rsync -aHiv --delete --exclude '.*' "${theme}"/. "${dest}/"
