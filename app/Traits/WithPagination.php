<?php
namespace App\Traits;
// Ref:https://github.com/livewire/livewire/blob/master/src/WithPagination.php
use Illuminate\Pagination\Paginator;
trait WithPagination
{
    private $PerPageDefault=25;
    public $page = 1;
    public $per_page = 25;

    public function getQueryString()
    {
        $queryString = method_exists($this, 'queryString')
            ? $this->queryString()
            : $this->queryString;
        if($this->per_page!=$this->PerPageDefault)
            return array_merge(['page' => ['except' => 1],'per_page'=> ['except' => 1]], $queryString);
        else
            return array_merge(['page' => ['except' => 1]], $queryString);
    }

    public function initializeWithPagination()
    {
        $this->page = $this->resolvePage();
        $this->per_page=$this->resolvePerPage();

        Paginator::currentPageResolver(function () {
            return (int) $this->page;
        });

        Paginator::defaultView($this->paginationView());
        Paginator::defaultSimpleView($this->paginationSimpleView());
    }

    public function paginationView()
    {
        return 'shared.pagination';
    }

    public function paginationSimpleView()
    {
        return 'shared.pagination';
    }

    public function previousPage()
    {
        $this->setPage(max($this->page - 1, 1));
    }

    public function nextPage()
    {
        $this->setPage($this->page + 1);
    }

    public function gotoPage($page)
    {
        $this->setPage($page);
    }

    public function resetPage()
    {
        $this->setPage(1);
    }

    public function setPage($page)
    {
        $this->page = $page;
    }
    public function setPerPage($per_page)
    {
        $this->per_page = $per_page;
    }
    public function resolvePerPage()
    {
        // The "page" query string item should only be available
        // from within the original component mount run.
        return (int) request()->query('per_page', $this->per_page);
    }

    public function resolvePage()
    {
        // The "page" query string item should only be available
        // from within the original component mount run.
        return (int) request()->query('page', $this->page);
    }
}