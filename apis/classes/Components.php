<?php
class Component
{
    public function success($msg)
    {
        echo '
            <div class="alert alert-success text-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong> Success !</strong> ' . $msg . '
            </div>';
    }

    public function fail($msg)
    {
        echo '
            <div class="alert alert-danger text-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Failed!</strong>' . $msg . '
            </div>';
    }
}
