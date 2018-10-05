<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">assignment</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Simple Table</h4>
                        <div class="table-responsive">
                            <table id="table_config" class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th >Name</th>
                                        <th>Content</th>
                                        <th class="text-center">Group Posts</th>
                                        <!-- <th class="text-right">Posts</th> -->
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "select * from noidung where id_nhom='slideshow'";
                                    $sth = $pdo->prepare( $sql );
                                    $sth->execute();
                                    $data = $sth->fetchAll( PDO::FETCH_OBJ );
                                    // echo "<pre>";
                                    // print_r($data);
                                    // echo "</pre>";
                                    // exit();
                                    foreach ( $data as $k => $v )
                                    {
                                    

                                    ?>
                                    <tr>
                                        <td class="text-center"><?=$v->id?></td>
                                        <td><?=$v->name?></td>
                                        <td ><?=$v->content?></td>
                                        <td class="text-center"><?=$v->id_nhom?></td>
                                        <!-- <td class="text-right"><?=$v->posts?></td> -->
                                        <td class="td-actions text-right">
                                            <!-- <button type="button" rel="tooltip" class="btn btn-info btn-simple">
                                                <a href="?page=editconfig&&id=<?=$v->id?>"><i class="material-icons">person</i></a>
                                            </button> -->
                                            <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                            <a href="?page=editpageheader"><i class="material-icons">edit</i></a>
                                            </button>
                                            <!-- <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                            <a href="?page=editconfig&&id=<?=$v->id?>"><i class="material-icons">close</i></a>
                                            </button> -->
                                        </td>
                                    </tr>
                                    <?php 
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>