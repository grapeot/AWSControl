import time
import boto.ec2

access_key = 'SAMPLE_ACCESS_KEY'
secret_key='SAMPLE_SECRET_KEY'

conn = boto.ec2.connection.EC2Connection(access_key, secret_key)
conn.start_instances('INSTANCE_ID')
time.sleep(60)
conn.associate_address('INSTANCE_ID', 'ELASTIC_IP')
