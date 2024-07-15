#!/usr/bin/perl

use strict;
use warnings;
use CGI;
use Encode;

my $q = CGI->new;
print $q->header(-type => 'text/html', -charset => 'UTF-8');

my $name = $q->param('Name') // '';  # Initialize $name to an empty string if it's not defined
$name = encode('utf-8', $name) if $name;
print <<EOM;
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>テストCGIページ</title>
</head>
<body>
<table>
</table>
<input type="text" value="$name">
</body>
</html>
EOM
