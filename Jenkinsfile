pipeline {
  agent any
  stages {
    stage("Checkout Source") {
      steps {

        git credentialsId: 'git-fcc', url: 'https://github.com/CMS-FFC/fcc-staging.git'
      }
    }
    stage('Configuring Files') {

      steps {
        script {

          sh "sed -i.bak 's/shipping.bizkt.com.au:443\\/fccstg\\/app/shipping.bizkt.com.au:443\\/fccstg\\/app:${BUILD_NUMBER}/g' frydays.yaml"
          sh "sed -i.bak 's/shipping.bizkt.com.au:443\\/fccstg\\/db/shipping.bizkt.com.au:443\\/fccstg\\/db:${BUILD_NUMBER}/g' frydays.yaml"



        }

      }
    }

    stage('Building APP') {

      steps {
        script {

          dockerImageAPP = docker.build(registryAPP + ":$BUILD_NUMBER", "--no-cache -f Dockerfile.app .")


        }

      }
    }

    stage('Building DB') {
      steps {
        script {

          dockerImageDB = docker.build(registryDB + ":$BUILD_NUMBER", "--no-cache -f Dockerfile.db .")
        }

      }
    }

    stage('Shipping APP') {
      steps {
        script {

          docker.withRegistry( "https://shipping.bizkt.com.au:443", 'shipping_admin' ) {
            dockerImageAPP.push()
          }
        }

      }
    }

    stage('Shipping DB') {
      steps {
        script {
          docker.withRegistry( "https://shipping.bizkt.com.au:443", 'shipping_admin' ) {
            dockerImageDB.push()
          }
        }

      }
    }

    stage('K8s Deployment') {
      steps {
        script {
          kubernetesDeploy(configs: "frydays.yaml", kubeconfigId: "kube-key-01")
        }

      }
    }

  }
  environment {
    registryAPP = 'shipping.bizkt.com.au:443/fccstg/app'
    registryDB = 'shipping.bizkt.com.au:443/fccstg/db'
    dockerImageAPP = ''
    dockerImageDB = ''
  }
}
