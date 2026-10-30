@echo off
:: Ensure administrator privileges
net session >nul 2>&1
if %errorLevel% neq 0 (
    echo ==========================================================
    echo  Please right-click this file and choose:
    echo  "Run as administrator" to enable 24/7 background autostart!
    echo ==========================================================
    pause
    exit /b 1
)

echo Configuring Apache and MySQL to start automatically with Windows...
sc config wampapache start= auto
sc config wampmysqld start= auto

echo Starting services now...
net start wampapache
net start wampmysqld

echo.
echo ==========================================================
echo SUCCESS!
echo WAMP Apache and MySQL will now always run automatically
echo in the background whenever Windows starts.
echo Your website will remain permanently live at:
echo    http://localhost/interior/
echo ==========================================================
echo.
pause
