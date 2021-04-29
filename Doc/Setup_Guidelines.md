# Setup guidelines
* This guidelines update on 29/4/2021
## Requirement
* A Raspberry Pi 4B
* A RC522 module
* Some connecting wire
* A micro SD card with more than 16GB
## Procedure
### 1. Create an OS installer
* Download the Raspberry Pi Imager with corresponding version of you platform in https://www.raspberrypi.org/software/.
* Follow the instruction of the installer.
* After the installation, select **Other general purpose OS** --> **Ubuntu** --> **Ubuntu Desktop** as Operation System and your SD card as Storage.
* Click **WRITE** button in the imager and wait until it finish.
### 2. Initialization of the system
*  Insert the SD card into the Raspberry Pi
*  Connect the Keyboard, HDMI cable to the Raspberry Pi. Once the power cable is connected, the Raspberry Pi will boot automatically. It may take some time for the first boot up.
*  After the configuration screen of Ubuntu is shown, follow the instruction on the screen. Then wait until it finish.
*  A reboot will be applied and follow the instruction shown on screen after reboot.
**Please ensure your Raspberry Pi is connect to the internet**
### 3. Install XRDP
* Execute the following command to the terminal to install XRDP
```bash
sudo apt update
sudo apt install xrdp
```
* You can find the IP address of your Raspberry Pi in your router website, if you do not know how to login your touter website, tou can execute the follow command.
```bash
sudo apt install net-tools
ifcongfig
```
* Which you should see your IP address of your Raspberry Pi on wlan field.
* Open Remote Desktop Connection in the Windows or install it if you are using other platform.
* Input the IP address of the Raspberry Pi to the Remote Desktop Connection.
* Select Xorg as Session, input your username and password of your Raspberry Pi which you have been setup before.
* After installation, you may need to log out first before using the Remote Desktop Connection.
### 4. Install all requirements for this project
#### Install rasi-config

```bash
wget https://archive.raspberrypi.org/debian/pool/main/r/raspi-config/raspi-config_20210212_all.deb -P /tmp
sudo dpkg -i /tmp/raspi-config_20210212_all.deb
```
* If there is missing dependency, you can execute the following command where {dependency} is what you are missing. 
```bash
sudo apt install {dependency}
```
* Execute the following command again.
```bash
sudo dpkg -i /tmp/raspi-config_20210212_all.deb
```
* Execute the following command to enter raspi-config
```bash
sudo raspi-config
```
* After the screen of raspi-config is shown, enable SPI and I2C in Interface Options.
#### Install PtQt5
```bash
sudo apt install python3-pyqt5
```
#### Install MariaDB
```bash
sudo apt-get install mariadb-server-10.5
```
#### Configure MariaDB
* Execute the following command
```bash
sudo mysql_secure_installation
```
* Follow the instruction, you may change the password for root account,  remove the anonymous.
### Create an account for the project
* Enter the MariaDB interface by executing the following command
```bash
sudo mysql -u root -p
```
* After entering to the MariaDB interface
* Execute the following command
```SQL
CREATE USER 'lockersystemadmin'@'localhost' IDENTIFIED BY 'lockersystemadmin';
GRANT ALL PRIVILEGES ON *.* TO 'lockersystemadmin'@'localhost';
FLUSH PRIVILEGES;
exit
```
#### Install mysql-connector-python library
```bash
sudo pip3 install mysql-connector-python
```
#### Install nginx
* Execute the following command to install and start nginx
```bash
sudo apt install nginx
sudo systemctl start nginx
```
* After the installation, you can browse the welcome page of nginx with entering 127.0.0.1 in the browser.
#### Install PHP
```bash
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install php7.4 php7.4-fpm php7.4-mbstring php7.4-mysql 
```
#### Configure nginx
* Execute the following command
```bash
sudo nano /etc/nginx/sites-enabled/default
```
* In thea file, replace
```
index index.html index.htm;
```
by
```
index index.html index.htm index.php;
```
and uncomment the following lines
```
location ~ \.php$ {
    include snippets/fastcgi-php.conf;
    fastcgi_pass unix:/var/run/php5-fpm.sock;
}
```
* Save the file with Ctrl+x, then y, then ENTER
* Reload the nginx by executing the following command
```bash
sudo systemctl reload nginx
```
#### Install git
```bash
sudo apt install git
```
#### Install project required library
```bash
git clone https://github.com/lthiery/SPI-Py.git
cd /home/$USER/SPI-Py
sudo python3 setup.py install
```
* You may delete this folder after installation
#### Clone the project repository
```bash
git clone https://github.com/murasakiakari/FYP.git
```
#### Finish