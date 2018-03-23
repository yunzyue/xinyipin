<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2017 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: zhangyajun <448901948@qq.com>
// +----------------------------------------------------------------------

namespace think\paginator\driver;

use think\Paginator;

class BootstrapDetailed extends Paginator
{

    /**
     * ��һҳ��ť
     * @param string $text
     * @return string
     */
    protected function getPreviousButton($text = "��һҳ")
    {

        if ($this->currentPage() <= 1) {
            return $this->getDisabledTextWrapper($text);
        }

        $url = $this->url(
            $this->currentPage() - 1
        );

        return $this->getPageLinkWrapper($url, $text);
    }



    //������ǩ
    protected  function totalshow()
    {

        $totalhtml="<li class=\"disabled\"><span>��".$this->total."����¼&nbsp&nbsp��".$this->currentPage()."ҳ/��".$this->lastPage()."ҳ</span></li>";
        return $totalhtml;

    }

    //βҳ��ǩ

    protected  function showlastpage($text = 'βҳ')
    {

        if($this->currentPage()==$this->lastPage())
        {
            return $this->getDisabledTextWrapper($text);

        }

        $url = $this->url($this->lastPage());
        return $this->getPageLinkWrapper($url, $text);
    }

    //��ҳ��ǩ

    protected  function showfirstpage($text = '��ҳ')
    {

        if($this->currentPage()==1)
        {
            return $this->getDisabledTextWrapper($text);

        }

        $url = $this->url(1);
        return $this->getPageLinkWrapper($url, $text);
    }
  //����ҳ
    protected  function afivepage($text = '����ҳ')
    {


        if($this->lastPage()<$this->currentPage()+5)
        {
            return $this->getDisabledTextWrapper($text);

        }
        $url = $this->url($this->currentPage()+5);


        return $this->getPageLinkWrapper($url, $text);
    }

    //ǰ��ҳ
    protected  function bfivepage($text = 'ǰ��ҳ')
    {


        if($this->currentPage()<5)
        {
            return $this->getDisabledTextWrapper($text);

        }
        $url = $this->url($this->currentPage()-5);


        return $this->getPageLinkWrapper($url, $text);
    }


    /**
     * ��һҳ��ť
     * @param string $text
     * @return string
     */
    protected function getNextButton($text = '��һҳ')
    {
        if (!$this->hasMore) {
            return $this->getDisabledTextWrapper($text);
        }

        $url = $this->url($this->currentPage() + 1);

        return $this->getPageLinkWrapper($url, $text);
    }

  //��ת����ҳ
    protected  function  gopage()
    {


        return $gotohtml="<li><form action='' method='get' ><span><input type='text' name='page'> <input type='submit' value='ȷ��'> </span></form></li>";
       // return $totalhtml;;

    }

    /**
     * ҳ�밴ť
     * @return string
     */
    protected function getLinks()
    {
        if ($this->simple)
            return '';

        $block = [
            'first'  => null,
            'slider' => null,
            'last'   => null
        ];

        $side   = 2;
        $window = $side * 2;

        if ($this->lastPage < $window +1) {
            $block['slider'] = $this->getUrlRange(1, $this->lastPage);

        } elseif ($this->currentPage <= $window-1) {

            $block['slider'] = $this->getUrlRange(1, $window + 1);
        } elseif ($this->currentPage > ($this->lastPage - $window+1)) {
            $block['slider']  = $this->getUrlRange($this->lastPage - ($window), $this->lastPage);

        } else {

            $block['slider'] = $this->getUrlRange($this->currentPage - $side, $this->currentPage + $side);
        }

        $html = '';

        if (is_array($block['first'])) {
            $html .= $this->getUrlLinks($block['first']);
        }

        if (is_array($block['slider'])) {

            $html .= $this->getUrlLinks($block['slider']);
        }

        if (is_array($block['last'])) {
           $html .= $this->getUrlLinks($block['last']);
        }

        return $html;
    }

    /**
     * ��Ⱦ��ҳhtml
     * @return mixed
     */
    public function render()
    {
        if ($this->hasPages()) {
            if ($this->simple) {
                return sprintf(
                    '<ul class="pager">%s %s %s</ul>',

                    $this->getPreviousButton(),
                    $this->getNextButton()
                );
            } else {
                return sprintf(
                    '<ul class="pagination"> %s %s %s %s %s %s %s %s </ul>',
                    //��ʾ����ҳ����Ϣ
                    $this->totalshow(),
                   //��һҳ
                    $this->showfirstpage(),
                   //��һҳ
                    $this->getPreviousButton(),
                   //ǰ��ҳ
                    $this->bfivepage(),
                   //ҳ��
                    $this->getLinks(),
                   //����ҳ
                    $this->afivepage(),
                    //��һҳ
                    $this->getNextButton(),
                   //���һҳ
                    $this->showlastpage()
                    //����ټӸ����� %s ������ʾ��ת����ҳ
                  //  $this->gopage()

                );
            }
        }
    }

    /**
     * ����һ���ɵ���İ�ť
     *
     * @param  string $url
     * @param  int    $page
     * @return string
     */
    protected function getAvailablePageWrapper($url, $page)
    {
        return '<li><a href="' . htmlentities($url) . '">' . $page . '</a></li>';
    }

    /**
     * ����һ�����õİ�ť
     *
     * @param  string $text
     * @return string
     */
    protected function getDisabledTextWrapper($text)
    {
        return '<li class="disabled"><span>' . $text . '</span></li>';
    }

    /**
     * ����һ������İ�ť
     *
     * @param  string $text
     * @return string
     */
    protected function getActivePageWrapper($text)
    {
        return '<li class="active"><span>' . $text . '</span></li>';
    }

    /**
     * ����ʡ�ԺŰ�ť
     *
     * @return string
     */
    protected function getDots($text = '...')
    {

        //$url = $this->url($this->currentPage() + 1);

      //  return $this->getPageLinkWrapper($url, $text);
       return $this->getDisabledTextWrapper('...');
    }

    /**
     * ��������ҳ�밴ť.
     *
     * @param  array $urls
     * @return string
     */
    protected function getUrlLinks(array $urls)
    {
        $html = '';

        foreach ($urls as $page => $url) {
            $html .= $this->getPageLinkWrapper($url, $page);
        }

        return $html;
    }

    /**
     * ������ͨҳ�밴ť
     *
     * @param  string $url
     * @param  int    $page
     * @return string
     */
    protected function getPageLinkWrapper($url, $page)
    {
        if ($page == $this->currentPage()) {
            return $this->getActivePageWrapper($page);
        }

        return $this->getAvailablePageWrapper($url, $page);
    }
}