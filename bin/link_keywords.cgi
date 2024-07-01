#!/bin/bash
sed 's/%2C/\n/g' <<< "${QUERY_STRING}" > /tmp/hoge
