pipeline {

  agent any

  stages {

   
    stage('Deploy App') {
      steps {
        script {
          kubernetesDeploy(configs: "fcc-app.yaml", kubeconfigId: "kubeconfig")
        }
      }
    }

  }

}
