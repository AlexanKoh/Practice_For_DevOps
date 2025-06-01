terraform {
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "~> 5.0"
    }
  }
}

provider "aws" {
  region = "us-east-1"
}

<<<<<<< HEAD
resource "aws_instance" "app_server" {
  ami           = "ami-0c55b159cbfafe1f0" # Amazon Linux 2
  instance_type = "t2.micro"

  user_data = <<-EOF
              #!/bin/bash
              sudo yum update -y
              sudo amazon-linux-extras install docker -y
              sudo service docker start
              sudo docker run -d \
                -p 80:80 \
                --restart always \
                your-dockerhub-username/devops-site:latest
              EOF

  vpc_security_group_ids = [aws_security_group.app.id]

  tags = {
    Name = "DevOps-Site-Container"
  }
}

=======
>>>>>>> 4219873039ac1bc68ce70f899dbc72026f8c30de
resource "aws_security_group" "app" {
  name = "devops-site-sg"

  ingress {
    from_port   = 80
    to_port     = 80
    protocol    = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
  }

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
}

resource "aws_instance" "app_server" {
  ami           = "ami-0554aa6767e249943"
  instance_type = "t2.micro"
  vpc_security_group_ids = [aws_security_group.app.id]

  user_data = <<-EOF
              #!/bin/bash
              yum update -y
              amazon-linux-extras install docker -y
              service docker start
              docker run -d -p 80:80 --restart always your-dockerhub-username/devops-site:latest
              EOF

  tags = {
    Name = "DevOps-Site-Container"
  }
}
