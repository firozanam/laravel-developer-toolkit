<?php
/**
 * Laravel Tool - Protected Version
 * This file is protected against unauthorized modification
 * Generated: 2025-06-26
 */

// Security check
if (!defined('LARAVEL_TOOL_ACCESS')) {
    define('LARAVEL_TOOL_ACCESS', true);
}

// Initialize protection system
function _init_protection() {
    // Encrypted content chunks
    $_chunk_000 = 'LyoqCiAqIExhcmF2ZWwgQXJ0aXNhbiBDb21tYW5kIFJ1bm5lciBmb3IgY1BhbmVsIFNoYXJlZCBIb3N0aW5nCiAqIAogKiBUaGlz';
    $_chunk_001 = 'IHNjcmlwdCBhbGxvd3MgeW91IHRvIHJ1biBMYXJhdmVsIGFydGlzYW4gY29tbWFuZHMgb24gc2hhcmVkIGhvc3RpbmcKICogd2hl';
    $_chunk_002 = 'cmUgdGVybWluYWwgYWNjZXNzIGlzIGxpbWl0ZWQuCiAqIAogKiDimqDvuI8gU0VDVVJJVFkgV0FSTklORzogVGhpcyBzY3JpcHQg';
    $_chunk_003 = 'aXMgcG90ZW50aWFsbHkgZGFuZ2Vyb3VzIGFzIGl0IGFsbG93cwogKiBleGVjdXRpbmcgYXJiaXRyYXJ5IGNvbW1hbmRzLiBVc2Ug';
    $_chunk_004 = 'aXQgb25seSB0ZW1wb3JhcmlseSBhbmQgZGVsZXRlIGltbWVkaWF0ZWx5IGFmdGVyIHVzZS4KICogCiAqIFVzYWdlOiBVcGxvYWQg';
    $_chunk_005 = 'dGhpcyBzY3JpcHQgdG8geW91ciBwdWJsaWMvc2NyaXB0cyBkaXJlY3RvcnkgYW5kIGFjY2VzcyBpdCB2aWEgYnJvd3Nlci4KICov';
    $_chunk_006 = 'CgovLyBTZXQgZXhlY3V0aW9uIHRpbWUgbGltaXQgdG8gMzAwIHNlY29uZHMgKDUgbWludXRlcykKc2V0X3RpbWVfbGltaXQoMzAw';
    $_chunk_007 = 'KTsKCi8vIFN0YXJ0IG91dHB1dCBidWZmZXJpbmcKb2Jfc3RhcnQoKTsKCi8vIERlZmluZSB0aGUgYmFzZSBkaXJlY3RvcnkgKExh';
    $_chunk_008 = 'cmF2ZWwgcm9vdCkKJGJhc2VEaXIgPSBkaXJuYW1lKF9fRElSX18pOwoKLy8gTGlzdCBvZiBzYWZlIGNvbW1hbmRzIHRoYXQgY2Fu';
    $_chunk_009 = 'IGJlIGV4ZWN1dGVkCiRzYWZlQ29tbWFuZHMgPSBbCiAgICAnY2FjaGU6Y2xlYXInID0+ICdDbGVhciBhcHBsaWNhdGlvbiBjYWNo';
    $_chunk_010 = 'ZScsCiAgICAnY29uZmlnOmNhY2hlJyA9PiAnQ3JlYXRlIGEgY2FjaGUgZmlsZSBmb3IgZmFzdGVyIGNvbmZpZ3VyYXRpb24gbG9h';
    $_chunk_011 = 'ZGluZycsCiAgICAnY29uZmlnOmNsZWFyJyA9PiAnUmVtb3ZlIHRoZSBjb25maWd1cmF0aW9uIGNhY2hlIGZpbGUnLAogICAgJ3Jv';
    $_chunk_012 = 'dXRlOmNhY2hlJyA9PiAnQ3JlYXRlIGEgcm91dGUgY2FjaGUgZmlsZSBmb3IgZmFzdGVyIHJvdXRlIHJlZ2lzdHJhdGlvbicsCiAg';
    $_chunk_013 = 'ICAncm91dGU6Y2xlYXInID0+ICdSZW1vdmUgdGhlIHJvdXRlIGNhY2hlIGZpbGUnLAogICAgJ3ZpZXc6Y2FjaGUnID0+ICdDb21w';
    $_chunk_014 = 'aWxlIGFsbCBvZiB0aGUgYXBwbGljYXRpb25cJ3MgQmxhZGUgdGVtcGxhdGVzJywKICAgICd2aWV3OmNsZWFyJyA9PiAnQ2xlYXIg';
    $_chunk_015 = 'YWxsIGNvbXBpbGVkIHZpZXcgZmlsZXMnLAogICAgJ2tleTpnZW5lcmF0ZScgPT4gJ0dlbmVyYXRlIGFwcGxpY2F0aW9uIGtleScs';
    $_chunk_016 = 'CiAgICAnbWlncmF0ZScgPT4gJ1J1biBkYXRhYmFzZSBtaWdyYXRpb25zJywKICAgICdtaWdyYXRlOnN0YXR1cycgPT4gJ1Nob3cg';
    $_chunk_017 = 'dGhlIHN0YXR1cyBvZiBlYWNoIG1pZ3JhdGlvbicsCiAgICAnb3B0aW1pemU6Y2xlYXInID0+ICdSZW1vdmUgdGhlIGNhY2hlZCBi';
    $_chunk_018 = 'b290c3RyYXAgZmlsZXMnLAogICAgJ3N0b3JhZ2U6bGluaycgPT4gJ0NyZWF0ZSB0aGUgc3ltYm9saWMgbGlua3MgY29uZmlndXJl';
    $_chunk_019 = 'ZCBmb3IgdGhlIGFwcGxpY2F0aW9uJywKICAgICdxdWV1ZTpyZXN0YXJ0JyA9PiAnUmVzdGFydCBxdWV1ZSB3b3JrZXIgZGFlbW9u';
    $_chunk_020 = 'cyBhZnRlciB0aGVpciBjdXJyZW50IGpvYicsCiAgICAncXVldWU6Y2xlYXInID0+ICdEZWxldGUgYWxsIG9mIHRoZSBqb2JzIGZy';
    $_chunk_021 = 'b20gdGhlIHNwZWNpZmllZCBxdWV1ZScsCiAgICAncGFja2FnZTpkaXNjb3ZlcicgPT4gJ1JlYnVpbGQgdGhlIGNhY2hlZCBwYWNr';
    $_chunk_022 = 'YWdlIG1hbmlmZXN0JywKXTsKCi8vIEhUTUwgaGVhZGVyCmVjaG8gJzwhRE9DVFlQRSBodG1sPgo8aHRtbCBsYW5nPSJlbiI+Cjxo';
    $_chunk_023 = 'ZWFkPgogICAgPG1ldGEgY2hhcnNldD0iVVRGLTgiPgogICAgPG1ldGEgbmFtZT0idmlld3BvcnQiIGNvbnRlbnQ9IndpZHRoPWRl';
    $_chunk_024 = 'dmljZS13aWR0aCwgaW5pdGlhbC1zY2FsZT0xLjAiPgogICAgPHRpdGxlPkxhcmF2ZWwgQXJ0aXNhbiBDb21tYW5kIFJ1bm5lcjwv';
    $_chunk_025 = 'dGl0bGU+CiAgICA8c3R5bGU+CiAgICAgICAgYm9keSB7CiAgICAgICAgICAgIGZvbnQtZmFtaWx5OiAtYXBwbGUtc3lzdGVtLCBC';
    $_chunk_026 = 'bGlua01hY1N5c3RlbUZvbnQsICJTZWdvZSBVSSIsIFJvYm90bywgSGVsdmV0aWNhLCBBcmlhbCwgc2Fucy1zZXJpZjsKICAgICAg';
    $_chunk_027 = 'ICAgICAgbGluZS1oZWlnaHQ6IDEuNjsKICAgICAgICAgICAgY29sb3I6ICMzMzM7CiAgICAgICAgICAgIG1heC13aWR0aDogMTAw';
    $_chunk_028 = 'MHB4OwogICAgICAgICAgICBtYXJnaW46IDAgYXV0bzsKICAgICAgICAgICAgcGFkZGluZzogMjBweDsKICAgICAgICB9CiAgICAg';
    $_chunk_029 = 'ICAgaDEsIGgyLCBoMyB7CiAgICAgICAgICAgIGNvbG9yOiAjMmQzNzQ4OwogICAgICAgIH0KICAgICAgICAuc3VjY2VzcyB7CiAg';
    $_chunk_030 = 'ICAgICAgICAgIGNvbG9yOiAjMzhhMTY5OwogICAgICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZjBmZmY0OwogICAgICAgICAg';
    $_chunk_031 = 'ICBib3JkZXItbGVmdDogNHB4IHNvbGlkICMzOGExNjk7CiAgICAgICAgICAgIHBhZGRpbmc6IDhweCAxMnB4OwogICAgICAgICAg';
    $_chunk_032 = 'ICBtYXJnaW46IDhweCAwOwogICAgICAgIH0KICAgICAgICAud2FybmluZyB7CiAgICAgICAgICAgIGNvbG9yOiAjZDY5ZTJlOwog';
    $_chunk_033 = 'ICAgICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmYWYwOwogICAgICAgICAgICBib3JkZXItbGVmdDogNHB4IHNvbGlkICNk';
    $_chunk_034 = 'NjllMmU7CiAgICAgICAgICAgIHBhZGRpbmc6IDhweCAxMnB4OwogICAgICAgICAgICBtYXJnaW46IDhweCAwOwogICAgICAgIH0K';
    $_chunk_035 = 'ICAgICAgICAuZXJyb3IgewogICAgICAgICAgICBjb2xvcjogI2U1M2UzZTsKICAgICAgICAgICAgYmFja2dyb3VuZC1jb2xvcjog';
    $_chunk_036 = 'I2ZmZjVmNTsKICAgICAgICAgICAgYm9yZGVyLWxlZnQ6IDRweCBzb2xpZCAjZTUzZTNlOwogICAgICAgICAgICBwYWRkaW5nOiA4';
    $_chunk_037 = 'cHggMTJweDsKICAgICAgICAgICAgbWFyZ2luOiA4cHggMDsKICAgICAgICB9CiAgICAgICAgLmluZm8gewogICAgICAgICAgICBj';
    $_chunk_038 = 'b2xvcjogIzMxODJjZTsKICAgICAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogI2ViZjhmZjsKICAgICAgICAgICAgYm9yZGVyLWxl';
    $_chunk_039 = 'ZnQ6IDRweCBzb2xpZCAjMzE4MmNlOwogICAgICAgICAgICBwYWRkaW5nOiA4cHggMTJweDsKICAgICAgICAgICAgbWFyZ2luOiA4';
    $_chunk_040 = 'cHggMDsKICAgICAgICB9CiAgICAgICAgY29kZSB7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmN2ZhZmM7CiAgICAg';
    $_chunk_041 = 'ICAgICAgIHBhZGRpbmc6IDJweCA0cHg7CiAgICAgICAgICAgIGJvcmRlci1yYWRpdXM6IDNweDsKICAgICAgICAgICAgZm9udC1m';
    $_chunk_042 = 'YW1pbHk6IE1lbmxvLCBNb25hY28sIENvbnNvbGFzLCAiTGliZXJhdGlvbiBNb25vIiwgbW9ub3NwYWNlOwogICAgICAgIH0KICAg';
    $_chunk_043 = 'ICAgICBwcmUgewogICAgICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZjdmYWZjOwogICAgICAgICAgICBwYWRkaW5nOiAxMnB4';
    $_chunk_044 = 'OwogICAgICAgICAgICBib3JkZXItcmFkaXVzOiA1cHg7CiAgICAgICAgICAgIG92ZXJmbG93LXg6IGF1dG87CiAgICAgICAgfQog';
    $_chunk_045 = 'ICAgICAgIC5jb21tYW5kLW91dHB1dCB7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICMxYTIwMmM7CiAgICAgICAgICAg';
    $_chunk_046 = 'IGNvbG9yOiAjZTJlOGYwOwogICAgICAgICAgICBwYWRkaW5nOiAxMnB4OwogICAgICAgICAgICBib3JkZXItcmFkaXVzOiA1cHg7';
    $_chunk_047 = 'CiAgICAgICAgICAgIGZvbnQtZmFtaWx5OiBNZW5sbywgTW9uYWNvLCBDb25zb2xhcywgIkxpYmVyYXRpb24gTW9ubyIsIG1vbm9z';
    $_chunk_048 = 'cGFjZTsKICAgICAgICAgICAgbWFyZ2luLXRvcDogMTBweDsKICAgICAgICAgICAgd2hpdGUtc3BhY2U6IHByZS13cmFwOwogICAg';
    $_chunk_049 = 'ICAgIH0KICAgICAgICAuZ3JpZCB7CiAgICAgICAgICAgIGRpc3BsYXk6IGdyaWQ7CiAgICAgICAgICAgIGdyaWQtdGVtcGxhdGUt';
    $_chunk_050 = 'Y29sdW1uczogcmVwZWF0KGF1dG8tZmlsbCwgbWlubWF4KDMwMHB4LCAxZnIpKTsKICAgICAgICAgICAgZ2FwOiAxcmVtOwogICAg';
    $_chunk_051 = 'ICAgIH0KICAgICAgICAuY2FyZCB7CiAgICAgICAgICAgIGJvcmRlcjogMXB4IHNvbGlkICNlMmU4ZjA7CiAgICAgICAgICAgIGJv';
    $_chunk_052 = 'cmRlci1yYWRpdXM6IDVweDsKICAgICAgICAgICAgcGFkZGluZzogMXJlbTsKICAgICAgICB9CiAgICAgICAgLmNhcmQgaDMgewog';
    $_chunk_053 = 'ICAgICAgICAgICBtYXJnaW4tdG9wOiAwOwogICAgICAgIH0KICAgICAgICBmb3JtIHsKICAgICAgICAgICAgbWFyZ2luLWJvdHRv';
    $_chunk_054 = 'bTogMjBweDsKICAgICAgICB9CiAgICAgICAgaW5wdXRbdHlwZT0idGV4dCJdLCBzZWxlY3QgewogICAgICAgICAgICB3aWR0aDog';
    $_chunk_055 = 'MTAwJTsKICAgICAgICAgICAgcGFkZGluZzogOHB4OwogICAgICAgICAgICBtYXJnaW4tYm90dG9tOiAxMHB4OwogICAgICAgICAg';
    $_chunk_056 = 'ICBib3JkZXI6IDFweCBzb2xpZCAjZTJlOGYwOwogICAgICAgICAgICBib3JkZXItcmFkaXVzOiA0cHg7CiAgICAgICAgfQogICAg';
    $_chunk_057 = 'ICAgIGJ1dHRvbiB7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICM0Mjk5ZTE7CiAgICAgICAgICAgIGNvbG9yOiB3aGl0';
    $_chunk_058 = 'ZTsKICAgICAgICAgICAgYm9yZGVyOiBub25lOwogICAgICAgICAgICBwYWRkaW5nOiA4cHggMTZweDsKICAgICAgICAgICAgYm9y';
    $_chunk_059 = 'ZGVyLXJhZGl1czogNHB4OwogICAgICAgICAgICBjdXJzb3I6IHBvaW50ZXI7CiAgICAgICAgfQogICAgICAgIGJ1dHRvbjpob3Zl';
    $_chunk_060 = 'ciB7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICMzMTgyY2U7CiAgICAgICAgfQogICAgICAgIC5zZWN1cml0eS13YXJu';
    $_chunk_061 = 'aW5nIHsKICAgICAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogIzc0MmEyYTsKICAgICAgICAgICAgY29sb3I6IHdoaXRlOwogICAg';
    $_chunk_062 = 'ICAgICAgICBwYWRkaW5nOiAxNXB4OwogICAgICAgICAgICBib3JkZXItcmFkaXVzOiA1cHg7CiAgICAgICAgICAgIG1hcmdpbi1i';
    $_chunk_063 = 'b3R0b206IDIwcHg7CiAgICAgICAgICAgIGZvbnQtd2VpZ2h0OiBib2xkOwogICAgICAgIH0KICAgIDwvc3R5bGU+CjwvaGVhZD4K';
    $_chunk_064 = 'PGJvZHk+CiAgICA8ZGl2IGNsYXNzPSJzZWN1cml0eS13YXJuaW5nIj4KICAgICAgICDimqDvuI8gU0VDVVJJVFkgV0FSTklORzog';
    $_chunk_065 = 'VGhpcyBzY3JpcHQgaXMgcG90ZW50aWFsbHkgZGFuZ2Vyb3VzIGFzIGl0IGFsbG93cyBleGVjdXRpbmcgY29tbWFuZHMgb24geW91';
    $_chunk_066 = 'ciBzZXJ2ZXIuCiAgICAgICAgRGVsZXRlIHRoaXMgZmlsZSBpbW1lZGlhdGVseSBhZnRlciB1c2UhCiAgICA8L2Rpdj4KICAgIDxo';
    $_chunk_067 = 'MT5MYXJhdmVsIEFydGlzYW4gQ29tbWFuZCBSdW5uZXI8L2gxPgonOwoKLy8gQ2hlY2sgaWYgUEhQIGlzIHJ1bm5pbmcgYXMgQ0dJ';
    $_chunk_068 = 'L0Zhc3RDR0kKJGlzQ2dpID0gKHN1YnN0cihwaHBfc2FwaV9uYW1lKCksIDAsIDMpID09PSAnY2dpJyk7CmlmICgkaXNDZ2kpIHsK';
    $_chunk_069 = 'ICAgIGVjaG8gJzxkaXYgY2xhc3M9Indhcm5pbmciPlBIUCBpcyBydW5uaW5nIGFzIENHSS9GYXN0Q0dJLiBTb21lIGNvbW1hbmRz';
    $_chunk_070 = 'IG1heSBub3Qgd29yayBhcyBleHBlY3RlZC48L2Rpdj4nOwp9CgovLyBDaGVjayBpZiBhIGNvbW1hbmQgd2FzIHN1Ym1pdHRlZApp';
    $_chunk_071 = 'ZiAoaXNzZXQoJF9QT1NUWydjb21tYW5kJ10pIHx8IGlzc2V0KCRfR0VUWydjb21tYW5kJ10pKSB7CiAgICAkY29tbWFuZCA9ICRf';
    $_chunk_072 = 'UE9TVFsnY29tbWFuZCddID8/ICRfR0VUWydjb21tYW5kJ107CiAgICAkb3B0aW9ucyA9ICRfUE9TVFsnb3B0aW9ucyddID8/ICRf';
    $_chunk_073 = 'R0VUWydvcHRpb25zJ10gPz8gJyc7CiAgICAKICAgIC8vIFNlY3VyaXR5IGNoZWNrIC0gb25seSBhbGxvdyBwcmVkZWZpbmVkIHNh';
    $_chunk_074 = 'ZmUgY29tbWFuZHMKICAgICRjb21tYW5kQmFzZSA9IGV4cGxvZGUoJyAnLCAkY29tbWFuZClbMF07CiAgICBpZiAoIWFycmF5X2tl';
    $_chunk_075 = 'eV9leGlzdHMoJGNvbW1hbmRCYXNlLCAkc2FmZUNvbW1hbmRzKSkgewogICAgICAgIGVjaG8gJzxkaXYgY2xhc3M9ImVycm9yIj5F';
    $_chunk_076 = 'cnJvcjogQ29tbWFuZCBub3QgYWxsb3dlZCBmb3Igc2VjdXJpdHkgcmVhc29ucy48L2Rpdj4nOwogICAgfSBlbHNlIHsKICAgICAg';
    $_chunk_077 = 'ICBlY2hvICc8aDI+UnVubmluZyBDb21tYW5kOiA8Y29kZT5waHAgYXJ0aXNhbiAnIC4gaHRtbHNwZWNpYWxjaGFycygkY29tbWFu';
    $_chunk_078 = 'ZCAuICcgJyAuICRvcHRpb25zKSAuICc8L2NvZGU+PC9oMj4nOwogICAgICAgIAogICAgICAgIC8vIENoYW5nZSB0byB0aGUgYmFz';
    $_chunk_079 = 'ZSBkaXJlY3RvcnkKICAgICAgICBjaGRpcigkYmFzZURpcik7CiAgICAgICAgCiAgICAgICAgLy8gUHJlcGFyZSB0aGUgY29tbWFu';
    $_chunk_080 = 'ZAogICAgICAgICRhcnRpc2FuQ29tbWFuZCA9ICdwaHAgYXJ0aXNhbiAnIC4gZXNjYXBlc2hlbGxjbWQoJGNvbW1hbmQpIC4gJyAn';
    $_chunk_081 = 'IC4gZXNjYXBlc2hlbGxjbWQoJG9wdGlvbnMpIC4gJyAyPiYxJzsKICAgICAgICAKICAgICAgICAvLyBFeGVjdXRlIHRoZSBjb21t';
    $_chunk_082 = 'YW5kCiAgICAgICAgJG91dHB1dCA9IFtdOwogICAgICAgICRyZXR1cm5WYXIgPSAwOwogICAgICAgIGV4ZWMoJGFydGlzYW5Db21t';
    $_chunk_083 = 'YW5kLCAkb3V0cHV0LCAkcmV0dXJuVmFyKTsKICAgICAgICAKICAgICAgICAvLyBEaXNwbGF5IHRoZSBvdXRwdXQKICAgICAgICBl';
    $_chunk_084 = 'Y2hvICc8ZGl2IGNsYXNzPSJjb21tYW5kLW91dHB1dCI+JzsKICAgICAgICBpZiAoJHJldHVyblZhciA9PT0gMCkgewogICAgICAg';
    $_chunk_085 = 'ICAgICBlY2hvIGltcGxvZGUoIlxuIiwgYXJyYXlfbWFwKCdodG1sc3BlY2lhbGNoYXJzJywgJG91dHB1dCkpOwogICAgICAgICAg';
    $_chunk_086 = 'ICBlY2hvICJcblxuIiAuICc8c3BhbiBzdHlsZT0iY29sb3I6ICM2OGQzOTE7Ij5Db21tYW5kIGNvbXBsZXRlZCBzdWNjZXNzZnVs';
    $_chunk_087 = 'bHkhPC9zcGFuPic7CiAgICAgICAgfSBlbHNlIHsKICAgICAgICAgICAgZWNobyBpbXBsb2RlKCJcbiIsIGFycmF5X21hcCgnaHRt';
    $_chunk_088 = 'bHNwZWNpYWxjaGFycycsICRvdXRwdXQpKTsKICAgICAgICAgICAgZWNobyAiXG5cbiIgLiAnPHNwYW4gc3R5bGU9ImNvbG9yOiAj';
    $_chunk_089 = 'ZjU2NTY1OyI+Q29tbWFuZCBmYWlsZWQgd2l0aCBleGl0IGNvZGU6ICcgLiAkcmV0dXJuVmFyIC4gJzwvc3Bhbj4nOwogICAgICAg';
    $_chunk_090 = 'IH0KICAgICAgICBlY2hvICc8L2Rpdj4nOwogICAgfQp9CgovLyBDb21tYW5kIGZvcm0KZWNobyAnCiAgICA8aDI+UnVuIEFydGlz';
    $_chunk_091 = 'YW4gQ29tbWFuZDwvaDI+CiAgICA8Zm9ybSBtZXRob2Q9InBvc3QiPgogICAgICAgIDxkaXY+CiAgICAgICAgICAgIDxsYWJlbCBm';
    $_chunk_092 = 'b3I9ImNvbW1hbmQiPlNlbGVjdCBDb21tYW5kOjwvbGFiZWw+CiAgICAgICAgICAgIDxzZWxlY3QgbmFtZT0iY29tbWFuZCIgaWQ9';
    $_chunk_093 = 'ImNvbW1hbmQiPgonOwoKZm9yZWFjaCAoJHNhZmVDb21tYW5kcyBhcyAkY21kID0+ICRkZXNjcmlwdGlvbikgewogICAgZWNobyAn';
    $_chunk_094 = 'PG9wdGlvbiB2YWx1ZT0iJyAuICRjbWQgLiAnIj4nIC4gJGNtZCAuICcgLSAnIC4gJGRlc2NyaXB0aW9uIC4gJzwvb3B0aW9uPic7';
    $_chunk_095 = 'Cn0KCmVjaG8gJwogICAgICAgICAgICA8L3NlbGVjdD4KICAgICAgICA8L2Rpdj4KICAgICAgICA8ZGl2PgogICAgICAgICAgICA8';
    $_chunk_096 = 'bGFiZWwgZm9yPSJvcHRpb25zIj5PcHRpb25zIChvcHRpb25hbCk6PC9sYWJlbD4KICAgICAgICAgICAgPGlucHV0IHR5cGU9InRl';
    $_chunk_097 = 'eHQiIG5hbWU9Im9wdGlvbnMiIGlkPSJvcHRpb25zIiBwbGFjZWhvbGRlcj0iLS1mb3JjZSAtLXF1aWV0Ij4KICAgICAgICA8L2Rp';
    $_chunk_098 = 'dj4KICAgICAgICA8YnV0dG9uIHR5cGU9InN1Ym1pdCI+UnVuIENvbW1hbmQ8L2J1dHRvbj4KICAgIDwvZm9ybT4KCiAgICA8aDI+';
    $_chunk_099 = 'Q29tbW9uIENvbW1hbmRzPC9oMj4KICAgIDxkaXYgY2xhc3M9ImdyaWQiPgonOwoKLy8gRGlzcGxheSBjb21tb24gY29tbWFuZHMg';
    $_chunk_100 = 'YXMgY2FyZHMKJGNvbW1vbkNvbW1hbmRzID0gWwogICAgJ2NhY2hlOmNsZWFyJyA9PiAnQ2xlYXJzIHRoZSBhcHBsaWNhdGlvbiBj';
    $_chunk_101 = 'YWNoZScsCiAgICAnY29uZmlnOmNhY2hlJyA9PiAnQ3JlYXRlcyBhIGNhY2hlIGZpbGUgZm9yIGZhc3RlciBjb25maWd1cmF0aW9u';
    $_chunk_102 = 'IGxvYWRpbmcnLAogICAgJ3JvdXRlOmNhY2hlJyA9PiAnQ3JlYXRlcyBhIHJvdXRlIGNhY2hlIGZpbGUgZm9yIGZhc3RlciByb3V0';
    $_chunk_103 = 'ZSByZWdpc3RyYXRpb24nLAogICAgJ3ZpZXc6Y2FjaGUnID0+ICdDb21waWxlcyBhbGwgQmxhZGUgdGVtcGxhdGVzJywKICAgICdr';
    $_chunk_104 = 'ZXk6Z2VuZXJhdGUnID0+ICdHZW5lcmF0ZXMgYSBuZXcgYXBwbGljYXRpb24ga2V5JywKICAgICdzdG9yYWdlOmxpbmsnID0+ICdD';
    $_chunk_105 = 'cmVhdGVzIGEgc3ltYm9saWMgbGluayBmcm9tIHB1YmxpYy9zdG9yYWdlIHRvIHN0b3JhZ2UvYXBwL3B1YmxpYycsCiAgICAnb3B0';
    $_chunk_106 = 'aW1pemU6Y2xlYXInID0+ICdSZW1vdmVzIHRoZSBjYWNoZWQgYm9vdHN0cmFwIGZpbGVzJywKXTsKCmZvcmVhY2ggKCRjb21tb25D';
    $_chunk_107 = 'b21tYW5kcyBhcyAkY21kID0+ICRkZXNjcmlwdGlvbikgewogICAgZWNobyAnCiAgICAgICAgPGRpdiBjbGFzcz0iY2FyZCI+CiAg';
    $_chunk_108 = 'ICAgICAgICAgIDxoMz4nIC4gJGNtZCAuICc8L2gzPgogICAgICAgICAgICA8cD4nIC4gJGRlc2NyaXB0aW9uIC4gJzwvcD4KICAg';
    $_chunk_109 = 'ICAgICAgICAgPGZvcm0gbWV0aG9kPSJnZXQiPgogICAgICAgICAgICAgICAgPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iY29t';
    $_chunk_110 = 'bWFuZCIgdmFsdWU9IicgLiAkY21kIC4gJyI+CiAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9InN1Ym1pdCI+UnVuPC9idXR0';
    $_chunk_111 = 'b24+CiAgICAgICAgICAgIDwvZm9ybT4KICAgICAgICA8L2Rpdj4KICAgICc7Cn0KCmVjaG8gJwogICAgPC9kaXY+CgogICAgPGgy';
    $_chunk_112 = 'PlNlcnZlciBJbmZvcm1hdGlvbjwvaDI+CiAgICA8cHJlPic7CmVjaG8gIlBIUCBWZXJzaW9uOiAiIC4gcGhwdmVyc2lvbigpIC4g';
    $_chunk_113 = 'IlxuIjsKZWNobyAiU2VydmVyIFNvZnR3YXJlOiAiIC4gJF9TRVJWRVJbJ1NFUlZFUl9TT0ZUV0FSRSddIC4gIlxuIjsKZWNobyAi';
    $_chunk_114 = 'RG9jdW1lbnQgUm9vdDogIiAuICRfU0VSVkVSWydET0NVTUVOVF9ST09UJ10gLiAiXG4iOwplY2hvICJPcGVyYXRpbmcgU3lzdGVt';
    $_chunk_115 = 'OiAiIC4gUEhQX09TIC4gIlxuIjsKZWNobyAiUEhQIFNBUEk6ICIgLiBwaHBfc2FwaV9uYW1lKCkgLiAiXG4iOwplY2hvICJDdXJy';
    $_chunk_116 = 'ZW50IFdvcmtpbmcgRGlyZWN0b3J5OiAiIC4gZ2V0Y3dkKCkgLiAiXG4iOwplY2hvICJCYXNlIERpcmVjdG9yeTogIiAuICRiYXNl';
    $_chunk_117 = 'RGlyIC4gIlxuIjsKZWNobyAnPC9wcmU+CgogICAgPGRpdiBjbGFzcz0ic2VjdXJpdHktd2FybmluZyI+CiAgICAgICAg4pqg77iP';
    $_chunk_118 = 'IFNFQ1VSSVRZIFdBUk5JTkc6IERlbGV0ZSB0aGlzIGZpbGUgaW1tZWRpYXRlbHkgYWZ0ZXIgdXNlIQogICAgPC9kaXY+CjwvYm9k';
    $_chunk_119 = 'eT4KPC9odG1sPic7CgovLyBFbmQgb3V0cHV0IGJ1ZmZlcmluZyBhbmQgZmx1c2gKb2JfZW5kX2ZsdXNoKCk7IA==';
    
    // Reconstruct content
    $content = '';
    for ($i = 0; $i < 120; $i++) {
        $var_name = "_chunk_" . sprintf("%03d", $i);
        if (isset(${$var_name})) {
            $content .= ${$var_name};
        }
    }
    
    // Decode and execute
    $decoded = base64_decode($content);
    if ($decoded !== false) {
        // Clean execution without output buffering issues
        eval($decoded);
    } else {
        // Fallback error handling
        http_response_code(500);
        exit('Application temporarily unavailable');
    }
}

// Execute protected content
_init_protection();
?>