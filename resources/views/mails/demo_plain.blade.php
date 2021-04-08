Hello {{ $demo->receiver }},
This is demo email for testing purposes! Also, it's the HTML version.

Demo object values:

Demo One: {{ $demo->demo_one }}
Demo Two: {{ $demo->demo_two }}

Values passed by With method:

testVarOne: {{ $testVarOne }}
testVarOne: {{ $testVarOne }}

Thank you,
{{ $demo->sender }}