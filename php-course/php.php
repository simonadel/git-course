<?php require 'head.php'?>



            <div class="col-8">
            <form class="form-style p-4 text-white" method="GET" action="form.php">
                <div class="form-group">
                    <label class="text-center d-block" for="exampleInputName">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter name">
                    <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                </div>

                <div class="form-group">
                    <label class="text-center d-block" for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Submit</button>

            </form>