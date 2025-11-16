variable "aws_region" {
  description = "AWS region to deploy EC2 instance"
  default     = "us-east-1"
}

variable "instance_type" {
  description = "EC2 instance type"
  default     = "t3.medium"
}


variable "ami_id" {
  description = "AMI ID для Ubuntu"
  default     = "ami-0dba2cb6798deb6d8"
}
