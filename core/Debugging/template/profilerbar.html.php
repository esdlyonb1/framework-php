<div style="
background-color: red;
position: absolute;
bottom: 0;
width: 100vw;
"  >
    <span>
        Debug Mode On
    </span>

    <span>
        Auth : <span>
            <?php if(\Core\Session\Session::userConnected()){
                echo Core\Session\Session::user()['id']." : "." "
            } else{
                echo "Anonymous";
            }   ?>
        </span>
    </span>

</div>