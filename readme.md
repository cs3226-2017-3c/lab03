## Pull from server
1. Log in through Terminal/Putty, `ssh user@188.166.240.12` and key in your password.
2. Direct to Laravel project, `cd /var/www/html/cs3226`.
3. Pull from GitHub, `sudo git pull`, and key in your password (only for the first time of each session).

## Database
* Database name: student
* Columns:
  1. id => auto increment
  2. name 
  3. nickname
  4. kattis => kattis account
  5. country => 2-letter country code, e.g. SG, CN
  6. mc => x,x,x,x,x,x,x,x,x : 0.0<=x<=4.0
  7. tc => x,y : 0.0<=x<=10.5, 0.0<=y<=13.5
  8. hw => x,x,x,x,x,x,x,x,x,x : 0.0<=x<=1.5
  9. bs  => x,x,x,x,x,x,x,x,x : 0<=x<=1
  10. ks => x,x,x,x,x,x,x,x,x,x,x,x : 0<=x<=1
  11. ac => x,x,y,y,x,x,z,x : 0<=x<=1, 0<=y<=3, 0<=z<=6
  12. avatar => path of uploaded avatar
  13. comment
