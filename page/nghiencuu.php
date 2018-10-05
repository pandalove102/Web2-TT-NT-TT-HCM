<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="rose">
                    <a href="?page=addtintucsukien"><i class="material-icons">assignment</i></a>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Add</h4>
                        <div class="table-responsive">
                            <table id="table_config" class="table">
                                <thead>
                                    <tr>
                                        <!-- <th class="text-center">Picture</th> -->
                                        <th class="text-center">ID</th>
                                        <th >TieuDe</th>
                                        <!-- <th >Link</th> -->
                                        <th>Ngaytao</th>
                                        <th class="text-center">Group</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "select posts.*,groupposts.groupposts  from posts,groupposts where posts.id_nhom=groupposts.id and posts.id_nhom=5";
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
                                        <td><?=$v->tieude?></td>
                                        <!-- <td><?=$v->link?></td> -->
                                        <td><?=$v->ngaytao?></td>
                                        <td class="text-center"><?=$v->groupposts?></td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                            <a href="?page=edittintucsukien&&id=<?=$v->id?>"><i class="material-icons">edit</i></a>
                                            </button>
                                            <button type="button"  onclick="return confirm('Bạn có chắc chắn xoá không ?!');" rel="tooltip" class="btn btn-success btn-simple">
                                            <a href="?page=deltintucsukien&&id=<?=$v->id?>"><i class="material-icons">close</i></a>
                                            </button>
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

