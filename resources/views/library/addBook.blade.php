<div>

    <div class="card card-default container mt-3">

        <div class="card-header">

        </div>

        <div class="card-body">
            <form action="" class=" mt-2 " method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Book Name</label>
                        <input type="text" class="form-control" id="bookName" placeholder="Book Name" name="bookName">
                        <div class="text-danger"></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputAddress">Select Faculty</label>
                        <select id="selectFac" name="selectFac" class="form-control">
                            <option>~~~~~~~SELECT~~~~~~</option>
                            <option>  Management  </option>
                            <option>  Science  </option>

                        </select>
                        <div class="text-danger"></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputAddress">Publisher</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Publisher">
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Entry Date</label>
                        <input type="date" class="form-control" id="entryDate" name="entryDate" placeholder="Enter Date">
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
                        <div class="text-danger"></div>
                    </div>


                    <div class="form-group col-md-6">
                        <label for="inputAddress">Book Code</label>
                        <input type="text" class="form-control" id="bookCode" name="bookCode" placeholder="Book Code">
                        <div class="text-danger"></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputAddress">Book Type</label>
                        <select id="bookType" name="bookType" class="form-control">
                            <option class="align-content-center"> !!!!SELECT!!!!  </option>
                            <option>Course Book</option>
                            <option>General</option>
                            <option></option>
                        </select>
                    </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">ISBN Code</label>
                            <input type="text" class="form-control" id="bookCodeIsbn" name="bookCodeIsbn" placeholder="ISBN Code">
                            <div class="text-danger"></div>
                        </div>
                    </div>

                <div class="col-md-1 ml-auto">
                    <input type="submit" class=" btn btn-success btn-sm form-control" name="submit" >
                </div>


            </form>

        </div>
    </div>


</div>