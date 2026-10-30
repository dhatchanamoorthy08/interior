@echo off
cd /d "C:\wamp\www\interior"
echo ========================================================
echo          PUSH ELEGANT DESIGNERS TO GITHUB
echo ========================================================
echo.
set /p repo_url="Enter your GitHub Repository URL (or press Enter for default): "

if "%repo_url%"=="" (
    set repo_url=https://github.com/dhatchanamoorthy08/elegant-designers.git
)

echo.
echo Setting remote origin to: %repo_url%
git remote remove origin >nul 2>&1
git remote add origin %repo_url%

echo.
echo Pushing code to GitHub...
git branch -M main
git push -u origin main

echo.
echo Done!
pause
