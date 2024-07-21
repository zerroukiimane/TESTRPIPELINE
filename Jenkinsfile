pipeline {
    agent any 
    stages {
  stage('checkout') { 
      
            steps {
                git branch:"main",url:"https://github.com/zerroukiimane/TESTRPIPELINE.git"
            }
        }
        stage('Build') { 
      
            steps {
               bat " php index.php "
            }
        }
      stage('Test') { 
      
            steps {
                echo 'testing'

                  
            }
        }
 stage('Deploy') { 
      
            steps {
                echo 'deploying'

                  
            }
        }
        
        }
    }
