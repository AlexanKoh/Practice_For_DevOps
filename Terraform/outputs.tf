output "instance_ip" {
  description = "Public IP of site"
  value       = aws_instance.app_server.public_ip
}
