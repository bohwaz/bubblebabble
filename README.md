Bubble Babble Binary Data Encoding - PHP5 Library
============

See http://bohwaz.net/archives/web/Bubble_Babble.html for details.

Copyright 2011 BohwaZ - http://bohwaz.net/

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU Lesser General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

Based on :
- Bubble Babble spec: http://wiki.yak.net/589/Bubble_Babble_Encoding.txt
- Nitrxgen PHP script: http://www.nitrxgen.net/bubblebabble.php
- Bubble Babble encoder for Go: http://codereview.appspot.com/181122

Use:

```php
$encoded = BubbleBabble::Encode('Pineapple');
// => xigak-nyryk-humil-bosek-sonax

$decoded = BubbleBabble::Decode('xigak-nyryk-humil-bosek-sonax');
// => Pineapple
```

If your prefer procedural code, just use:

```php
function babble_encode($str)
{
	return BubbleBabble::Encode($str);
}

function babble_decode($str)
{
	return BubbleBabble::Decode($str);
}
```