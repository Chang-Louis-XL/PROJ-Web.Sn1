<style>
        /*========== forgot ==========*/
        /* Modal styles */
        /* .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 40%; 
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        } */
    </style>

    <!-- <div id="forgotModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <fieldset>
                <legend>忘記密碼</legend>
                <div>請輸入信箱以查詢密碼</div>
                <div><input type="text" name="email" id="email"></div>
                <div id="result"></div>
                <div><button onclick="find()">尋找</button></div>
            </fieldset>
        </div>
    </div> -->

    <div id="forgotModal" class="modal" tabindex="-1" role="dialog" style="display:none;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="forgotModalLabel">忘記密碼</h5>
        <button type="button" class="btn-close close" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">請輸入信箱以查詢密碼</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="輸入信箱">
          </div>
          <div id="result" class="mb-3"></div>
          <div class="d-grid">
            <button type="button" class="btn btn-primary" onclick="find()">尋找</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    <script>
        function find() {
            $.get("./api/forgot.php", {
                email: $("#email").val()
            }, (result) => {
                console.log(result);
                $("#result").text(result);
            });
        }

        $(document).ready(function() {
            // Show modal when loaded
            $("#forgotModal").css("display", "block");

            // Add close functionality
            $(".close").click(function() {
                $("#forgotModal").css("display", "none");
            });

            // Hide modal when clicking outside of modal-content
            $(window).click(function(event) {
                if (event.target.id == "forgotModal") {
                    $("#forgotModal").css("display", "none");
                }
            });
        });
    </script>




    <!-- <fieldset>
    <legend>忘記密碼</legend>
    <div>請輸入信箱以查詢密碼</div>
    <div><input type="text" name="email" id="email"></div>
    <div id="result"></div>
    <div><button onclick="find()">尋找</button></div>
</fieldset>
<script>
    function find() {
        $.get("../api/forgot.php", {
            email: $("#email").val()
        }, (result) => {
            console.log(result);
            $("#result").text(result)
        })
        
    }
</script> -->