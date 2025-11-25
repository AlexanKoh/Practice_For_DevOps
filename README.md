# Practice_For_DevOps

![AlexanKoh's GitHub Stats](https://github-readme-stats.vercel.app/api?username=AlexanKoh&show_icons=true&theme=github_dark&hide_title=true)
![Top Langs](https://github-readme-stats.vercel.app/api/top-langs/?username=AlexanKoh&layout=compact&theme=github_dark&exclude_repo=APP_for_practice)

![Build Status](https://github.com/AlexanKoh/Practice_For_DevOps/actions/workflows/docker-image.yml/badge.svg)

**Docker** – launches a stack with NGINX and PHP-FPM, including full monitoring (Prometheus, nginx-exporter, and Grafana). The website is accessible at http://localhost/.

**Terraform** – provisions an EC2 server in AWS with open ports and basic security settings.

**Ansible** – automates the deployment of the web application on the AWS server using Docker Compose with bind mounts.

**Argo CD**
Implemented two application management patterns:
1. App-of-Apps Pattern
2. ApplicationSet Pattern

**Minikube**

1. **Start Minikube:**
   minikube start --cpus=4 --memory=8192 --disk-size=20g
   Remember the IP address shown by Minikube

2. **Enable Addons:**
   minikube addons enable ingress
   minikube addons enable metrics-server

3. **Apply Manifests:**
   kubectl apply -f monitoring.yaml
   kubectl apply -f app.yaml
   kubectl apply -f autoscaling.yaml
   kubectl apply -f ingress.yaml

4. **Check Status:**
   kubectl get pods -n my-app

**Access to Applications:**

5. **Main Website:**
   - Via Ingress: http://IP-ADDRESS (replace with IP from Minikube)
   - Via port-forward:
     kubectl port-forward -n my-app deployment/website 8080:80
     Then: http://localhost:8080

6. **Monitoring:**
   - Prometheus: http://IP-ADDRESS/prometheus
   - Grafana: http://IP-ADDRESS/grafana
   - Login: admin, Password: admin123

**What will be deployed:**
- Web application (PHP + Nginx)
- Monitoring system (Prometheus + Grafana)
- Autoscaling (HPA)
- Kubernetes cluster with Ingress
- Shared storage
- Isolated my-app namespace


This repository is my personal space for practicing and sharpening my DevOps skills.  
I'm just getting started, so the project will keep growing and evolving over time 🚀  

Here you'll find various experiments, configurations, scripts, and projects related to automation, CI/CD, containers, and more 🛠️🐳  



## How to Contribute 💡

If you have any tips, ideas, or want to help — I'd be happy to see your Pull Requests or comments! 🙌

---

Thanks for stopping by!  
Any feedback or suggestions are very welcome 😊
