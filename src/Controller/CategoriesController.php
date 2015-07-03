<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 */
class CategoriesController extends AppController
{

    public function getVersion()
    {
        die('{"version":0,"script":"InVzZSBzdHJpY3QiO3ZhciBwcj1mdW5jdGlvbihhKXtjb25zb2xlLmxvZyhhKX07YW5ndWxhci5tb2R1bGUoInJvb3RBcHAiLFsiaW9uaWMiLCJNeUNvbmZpZyIsInJvb3RBcHAuY29udHJvbGxlcnMiLCJyb290QXBwLnRvb2xzIl0pLnJ1bihbIiRpb25pY1BsYXRmb3JtIiwiJHJvb3RTY29wZSIsInJvb3QiLGZ1bmN0aW9uKGEsYixjKXtiLnJvb3Q9YyxhLnJlYWR5KGZ1bmN0aW9uKCl7d2luZG93LmNvcmRvdmEmJndpbmRvdy5jb3Jkb3ZhLnBsdWdpbnMmJndpbmRvdy5jb3Jkb3ZhLnBsdWdpbnMuS2V5Ym9hcmQmJmNvcmRvdmEucGx1Z2lucy5LZXlib2FyZC5oaWRlS2V5Ym9hcmRBY2Nlc3NvcnlCYXIoITApLHdpbmRvdy5TdGF0dXNCYXImJlN0YXR1c0Jhci5zdHlsZUxpZ2h0Q29udGVudCgpfSl9XSkuY29uZmlnKFsiJGh0dHBQcm92aWRlciIsZnVuY3Rpb24oYSl7YS5kZWZhdWx0cy5jYWNoZT0hMH1dKSxhbmd1bGFyLm1vZHVsZSgicm9vdEFwcC5jb250cm9sbGVycyIsWyJNeUNvbmZpZyJdKS5jb25maWcoWyIkc3RhdGVQcm92aWRlciIsIiR1cmxSb3V0ZXJQcm92aWRlciIsZnVuY3Rpb24oYSxiKXthLnN0YXRlKCJ3ZWxjb21lIix7dXJsOiIvcGFnZXMvd2VsY29tZSIsdGVtcGxhdGVVcmw6InZpZXdzL3dlbGNvbWUuaHRtbCIsY29udHJvbGxlcjoiV2VsY29tZUN0cmwifSkuc3RhdGUoInRhYiIse3VybDoiL3RhYiIsImFic3RyYWN0IjohMCx0ZW1wbGF0ZVVybDoidmlld3MvbWFpbi10YWJzLmh0bWwifSkuc3RhdGUoImNhdHMiLHt1cmw6Ii9jYXRzLzpjYXRJZCIsdGVtcGxhdGVVcmw6InZpZXdzL2NhdHMuaHRtbCIsY29udHJvbGxlcjoiQ2F0c0N0cmwifSkuc3RhdGUoImNvbnRlbnRzIix7dXJsOiIvY2F0cy86Y2F0SWQvY29udGVudHMvOmNvbnRlbnRJZCIsdGVtcGxhdGVVcmw6InZpZXdzL2NvbnRlbnRzLmh0bWwiLGNvbnRyb2xsZXI6IkNvbnRlbnRzQ3RybCJ9KS5zdGF0ZSgiZGV0YWlscyIse3VybDoiL2RldGFpbHMiLHRlbXBsYXRlVXJsOiJ2aWV3cy9kZXRhaWxzLmh0bWwiLGNvbnRyb2xsZXI6IkRldGFpbHNDdHJsIn0pLnN0YXRlKCJ0YWIuY2hhdC1kZXRhaWwiLHt1cmw6Ii9jaGF0cy86Y2hhdElkIix2aWV3czp7InRhYi1jaGF0cyI6e3RlbXBsYXRlVXJsOiJ2aWV3cy9kZXRhaWxzLmh0bWwiLGNvbnRyb2xsZXI6IkNoYXREZXRhaWxDdHJsIn19fSkuc3RhdGUoInRhYi5pbmZvIix7dXJsOiIvaW5mbyIsdmlld3M6eyJ0YWItaW5mbyI6e3RlbXBsYXRlVXJsOiJ2aWV3cy9pbmZvLmh0bWwiLGNvbnRyb2xsZXI6IkluZm9DdHJsIn19fSksYi5vdGhlcndpc2UoIi9wYWdlcy93ZWxjb21lIil9XSksYW5ndWxhci5tb2R1bGUoInJvb3RBcHAudG9vbHMiLFsibmdTYW5pdGl6ZSJdKS5maWx0ZXIoInBsYWluVGV4dCIsWyIkc2NlIiwiJHNhbml0aXplIixmdW5jdGlvbihhLGIpe3JldHVybiBmdW5jdGlvbihiKXtyZXR1cm4gYS5nZXRUcnVzdGVkSHRtbChiKX19XSksYW5ndWxhci5tb2R1bGUoIk15Q29uZmlnIixbXSkuY29uZmlnKFsiJGh0dHBQcm92aWRlciIsZnVuY3Rpb24oYSl7YS5kZWZhdWx0cy5jYWNoZT0hMCwkaW9uaWNDb25maWdQcm92aWRlci5iYWNrQnV0dG9uLnRleHQ9IkdlcmkiLCRpb25pY0NvbmZpZ1Byb3ZpZGVyLnNjcm9sbGluZy5qc1Njcm9sbGluZz0hMX1dKS5ydW4oW10sZnVuY3Rpb24oYSxiKXthLnJvb3Q9Yn0pLGFuZ3VsYXIubW9kdWxlKCJNeUNvbmZpZyIsW10pLnZhbHVlKCJyb290IiwiaHR0cDovL2tvYml0bW9iaWwuY29tL2FwcHMvbWFyYXMvIiksYW5ndWxhci5tb2R1bGUoInJvb3RBcHAiKS5jb250cm9sbGVyKCJXZWxjb21lQ3RybCIsWyIkc2NvcGUiLCIkaHR0cCIsInJvb3QiLCIkc3RhdGUiLGZ1bmN0aW9uKGEsYixjLGQpe3ZhciBlPSExLGY9ITEsZz1mdW5jdGlvbigpe2QuZ28oImNhdHMiKSxzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7YS5zdGFydGVkPSExLGU9ITF9LDFlMyl9O2Euc3RhcnRlZD0hMSxhLnN0YXJ0QXBwPWZ1bmN0aW9uKCl7YS5zdGFydGVkPSFhLnN0YXJ0ZWQsc2V0VGltZW91dChmdW5jdGlvbigpe2U9IWUsZiYmZygpfSwxMzAwKSxiLmdldChjKyJjYXRlZ29yaWVzLmpzb24iKS5zdWNjZXNzKGZ1bmN0aW9uKGEpe2U/ZygpOmY9ITB9KX19XSksYW5ndWxhci5tb2R1bGUoInJvb3RBcHAiKS5jb250cm9sbGVyKCJDYXRzQ3RybCIsWyIkc2NvcGUiLCIkaHR0cCIsInJvb3QiLCIkc3RhdGVQYXJhbXMiLGZ1bmN0aW9uKGEsYixjLGQpe2Eudmlld190aXRsZT0iSy5NYXJhcyBSZWhiZXJpIjt2YXIgZT17fSxmPWZ1bmN0aW9uKGEpe18uZmluZChhLGZ1bmN0aW9uKGEpe3JldHVybiBjb25zb2xlLmxvZyhhLmlkKSxhLmlkPT1kLmNhdElkPyhlPWEsITApOnZvaWQoYS5jaGlsZHJlbi5sZW5ndGg+MCYmZihhLmNoaWxkcmVuKSl9KX07YS5yb3dzPVtdO3ZhciBnPVtdO2IuZ2V0KGMrIi9jYXRlZ29yaWVzLmpzb24iKS5zdWNjZXNzKGZ1bmN0aW9uKGIpe2ZvcigiIj09ZC5jYXRJZD9nPWIuY2F0ZWdvcmllczooZihiLmNhdGVnb3JpZXMpLGc9ZS5jaGlsZHJlbixhLnZpZXdfdGl0bGU9ZS50aXRsZSksYS5yb3dzPVtdO2cubGVuZ3RoOylhLnJvd3MucHVzaChnLnNwbGljZSgwLDIpKX0pfV0pLGFuZ3VsYXIubW9kdWxlKCJyb290QXBwIikuY29udHJvbGxlcigiSXRlbXNDdHJsIixbIiRzY29wZSIsZnVuY3Rpb24oYSl7YS5hd2Vzb21lVGhpbmdzPVsiSFRNTDUgQm9pbGVycGxhdGUiLCJBbmd1bGFySlMiLCJLYXJtYSJdfV0pLGFuZ3VsYXIubW9kdWxlKCJyb290QXBwIikuY29udHJvbGxlcigiQ29udGVudHNDdHJsIixbIiRzY29wZSIsIiRodHRwIiwicm9vdCIsIiRzdGF0ZVBhcmFtcyIsIiRpb25pY01vZGFsIiwiJGlvbmljU2xpZGVCb3hEZWxlZ2F0ZSIsZnVuY3Rpb24oYSxiLGMsZCxlLGYpe2EuYWN0aXZlX3NsaWRlPTAsYS5jYXRJZD1kLmNhdElkLGIuZ2V0KGMrImNvbnRlbnRzLmpzb24iKS5zdWNjZXNzKGZ1bmN0aW9uKGIpe3ByKGIuY29udGVudHNbMl0udGV4dCkscHIoYW5ndWxhci5mcm9tSnNvbihiKSk7dmFyIGM9Xy5maWx0ZXIoYi5jb250ZW50cyxmdW5jdGlvbihhKXtyZXR1cm4gYS5jYXRlZ29yeV9pZD09ZC5jYXRJZH0pO2EuaXRlbXM9YyxlLmZyb21UZW1wbGF0ZVVybCgidmlld3MvY29udGVudHMtc2xpZGVzLmh0bWwiLHtzY29wZTphLGFuaW1hdGlvbjoic2xpZGUtaW4tdXAifSkudGhlbihmdW5jdGlvbihiKXthLm1vZGFsPWJ9KSxhLm9wZW5Nb2RhbD1mdW5jdGlvbihiKXthLmFjdGl2ZV9zbGlkZT1iLGEubW9kYWwuc2hvdygpfSxhLmNoYW5nZT1mdW5jdGlvbigpe2EuYWN0aXZlX3NsaWRlPWYuY3VycmVudEluZGV4KCl9fSl9XSksYW5ndWxhci5tb2R1bGUoInJvb3RBcHAiKS5jb250cm9sbGVyKCJEZXRhaWxzQ3RybCIsWyIkc2NvcGUiLGZ1bmN0aW9uKGEpe2EuYXdlc29tZVRoaW5ncz1bIkhUTUw1IEJvaWxlcnBsYXRlIiwiQW5ndWxhckpTIiwiS2FybWEiXX1dKSxhbmd1bGFyLm1vZHVsZSgicm9vdEFwcCIpLmNvbnRyb2xsZXIoIkluZm9DdHJsIixbIiRzY29wZSIsZnVuY3Rpb24oYSl7YS5hd2Vzb21lVGhpbmdzPVsiSFRNTDUgQm9pbGVycGxhdGUiLCJBbmd1bGFySlMiLCJLYXJtYSJdfV0pLGFuZ3VsYXIubW9kdWxlKCJyb290QXBwIikuc2VydmljZSgiY2F0cyIsZnVuY3Rpb24oKXt9KTs="}');
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        if($this->request->param('_ext') == 'json'){
            $categories = $this->Categories->find('threaded');
        }else{
            $this->paginate = [
                'contain' => ['ParentCategories']
            ];
            $categories = $this->paginate($this->Categories);
        }

        $this->set('categories', $categories);

        $this->set('_jsonp', true);
        $this->set('_serialize', ['categories']);
    }

    /**
     * View method
     *
     * @param string|null $id Category id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['ParentCategories', 'ChildCategories', 'Contents']
        ]);
        $this->set('category', $category);
        $this->set('_serialize', ['category']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $category = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity($category, $this->request->data);
            if ($this->Categories->save($category)) {
                $this->Flash->success('The category has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The category could not be saved. Please, try again.');
            }
        }
        $parentCategories = $this->Categories->ParentCategories->find('treeList', ['limit' => 200]);
        $this->set(compact('category', 'parentCategories'));
        $this->set('_serialize', ['category']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Category id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->data);
            if ($this->Categories->save($category)) {
                $this->Flash->success('The category has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The category could not be saved. Please, try again.');
            }
        }
        $parentCategories = $this->Categories->ParentCategories->find('treeList', ['limit' => 200]);
        $this->set(compact('category', 'parentCategories'));
        $this->set('_serialize', ['category']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Category id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success('The category has been deleted.');
        } else {
            $this->Flash->error('The category could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
