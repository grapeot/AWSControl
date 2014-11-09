# AWS Control

This is a simple system allowing other users turn on/off a specific instance of AWS, which doesn't technically belong to the users.
This is especially useful for someone sharing EC2 resources with others, like for research.

## Framework

![Framework](https://raw.githubusercontent.com/grapeot/AWSControl/master/framework.png)

## Deployment

To Deploy this system, follow the procedures below:

* Install dependencies on the server: `apache2`, `libapache2-mod-php5`, `pip`. And then `pip install boto` to install `boto`, an AWS SDK for python.
* Create the IAM user credentials via the [IAM console](https://console.aws.amazon.com/iam/home?#home). 
Also Configure the user to grant it control privileges of the desired instance.
* Modify the python and php scripts (`aws.py`, `aws.php`) accordingly, especially:
    * The password on line 3 of `aws.php`
    * Your IAM credentials in line 4~5 of `aws.py`.
    * Your instance id in line 8 and 10 of `aws.py`
    * Your elastic ip in line 10 of `aws.py` (it's necessary to make the IP fixed even if the machine is rebooted)
* Deploy the scripts to the server machine (e.g. copy to `/var/www` or your own DocumentRoot)
* (Optional) If you also want email notification once the system is up, install `exim4`, and deploy the IP binding script `ready.py` to the EC2 instance.
Configure `crond` to launch it every time the system boots up.
Example configuration is like `@reboot /home/ubuntu/ready.sh`.
