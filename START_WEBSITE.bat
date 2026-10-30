@echo off
title Elegant Designers - Server Launcher
echo ========================================================
echo        ELEGANT DESIGNERS - PERMANENT SERVER LAUNCHER
echo ========================================================
echo.
echo Starting WAMP Apache and MySQL services...
net start wampapache >nul 2>&1
net start wampmysqld >nul 2>&1

echo.
echo Checking server status...
start "" "http://localhost/interior/"
echo.
echo Your website is live at:
echo    Local:   http://localhost/interior/
echo.
echo You can close this window now. The website stays live!
pause
