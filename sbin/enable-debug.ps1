REG ADD "HKLM\SOFTWARE\Wow6432Node\PLESK\PSA Config\Config" /v Debug /t REG_DWORD /d 1 /f
RUNDLL32.EXE user32.dll,UpdatePerUserSystemParameters