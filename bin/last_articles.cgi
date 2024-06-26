#!/bin/bash
source "$(dirname $0)/conf"
exec 2> "$logdir/$(basename $0).$(date +%Y%m%d_%H%M%S).$$"

echo -e 'Content-Type: text/html\n'
awk '{print $3}' "$datadir/post_list" |
xargs -I@ cat "$datadir/@/link"
