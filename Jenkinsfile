$pipeline {
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
                script {
                    def deployDir="C:\\Users\\amine pc\\Desktop\\Deploy"
                    
                  bat "copy index.php ${deployDir}\\"
                    
                    echo "Déploiment réussi dans $(deployDir)"

                  
            }
        }
        
        }

        post { 
            always { 
                echo "This run always"
            }
            success { 
                echo " This runs on success"
            }
            failed { 
                echo "tis runs on faileds" 
            }
        }
    }
