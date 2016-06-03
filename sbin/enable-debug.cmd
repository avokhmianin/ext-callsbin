@echo off
powershell.exe -ExecutionPolicy ByPass -File "%~dp0enable-debug.ps1" %*
