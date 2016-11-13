node {
    stage('SCM') {
        git 'https://github.com/HalaWKS/risk-manage-system.git'
    }
    stage('QA') {
        sh "sh /home/ubuntu/sonar-scanner-2.8/bin/sonar-scanner" 
    }
    stage('build') {
        
    }
    stage('deploy') {
        sh "cp -R /usr/share/tomcat7/.jenkins/workspace/demo/* /home/ubuntu/webapps/www/"
        sh "cp /home/ubuntu/webapps/database.php /home/ubuntu/webapps/www/config/"
        sh "docker stop myapp-web || true"
        sh "docker stop myapp-php  || true"
        sh "docker stop myapp-data || true"
        sh "docker start myapp-data || true"
        sh "docker start myapp-php || true"
        sh "docker start myapp-web || true"
    }
    stage('results') {
        
    }
}
