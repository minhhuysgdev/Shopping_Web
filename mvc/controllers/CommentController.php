<?php
class CommentController extends Connect
{
   
    private $commentModel;
    function __construct()
    {
        $this->call_models('CommentModel');
        $this->commentModel = new CommentModel;
    }
    function like()
    {
        if (isset($_SESSION['name']) && isset($_SESSION['id_khachhang'])) {
            if ($_POST['checklike']) {
                if (isset($_POST['idbinhluan']) != null && isset($_POST['idproduct']) != null) {
                    $data['checkkh'] = $this->commentModel->getkhfromchitietcoment($_POST['idbinhluan'], $_SESSION['id_khachhang']);
                    $data['getbinluansanpham'] = $this->commentModel->getbinhluansanpham($_POST['idbinhluan']);
                    $likes = $data['getbinluansanpham'][0]['likes'];
                    $newlikes = $likes - 1;
                    if ($_POST['valuecmt'] == 1) {
                        if (empty($data['checkkh'])) {
                            $data['cuslike'] = [
                                'id_binhluan' => $_POST['idbinhluan'],
                                'id_kh_like' => $_SESSION['id_khachhang'],
                                'ten_kh_like' => $_SESSION['name'],
                            ];
                            $this->commentModel->storecommentkike($data['cuslike']);
                            $this->commentModel->updatebinhluansanpham($_POST['idbinhluan'],  $likes+1);
                            exit;
                        }
                    } else  if ($_POST['valuecmt'] == 0) {    
                        if (isset($data['checkkh'])) {
                            $this->commentModel->deletechitietbinhluan($data['checkkh'][0]['id']);
                            $this->commentModel->updatebinhluansanpham($_POST['idbinhluan'], $newlikes);
                            exit;
                        }
                    }
                }
            }
        }
    }
    function store()
    {
        if (isset($_SESSION['name'])) {

            if (isset($_POST['comment'])) {

                if (!empty($_POST['img'])) {
                    $newcomment = [
                        'id_khachhang' => $_POST['id_kh'],
                        'tenkhachhang' => $_POST['ten_kh'],
                        'image' => $_POST['img'],
                        'id_sanpham' => $_POST['id_sp'],
                        'binhluan' => $_POST['cmt'],
                        'time' => $_POST['time'],
                        'star_rating' => $_POST['rating']
                    ];
                } else {
                    $newcomment = [
                        'id_khachhang' => $_POST['id_kh'],
                        'tenkhachhang' => $_POST['ten_kh'],
                        'image' => 'avatar.jpg',
                        'id_sanpham' => $_POST['id_sp'],
                        'binhluan' => $_POST['cmt'],
                        'time' => $_POST['time'],
                        'star_rating' => $_POST['rating']
                    ];
                }

                $id = $_POST['id_sp'];
                if (isset($_POST['id_kh']) && isset($_POST['ten_kh']) && isset($_POST['id_sp'])) {
                    $this->commentModel->addProductComment($newcomment);
                    header("Location:" . URL . 'layout/detail/' . $id);
                }
            } else {
                echo "WARRING : Không gửi được ";
            }
        } else {
            header("Location:" . URL . 'logincustomer/index');
        }
    }
}
