<?php

namespace Librinfo\SeedBatchBundle\Controller;

use Librinfo\SeedBatchBundle\Exception\InvalidSeedBatchCodeException;
use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\JsonResponse;

class SeedBatchAdminController extends CRUDController
{

    /**
     * generate a seed batch code
     */
    public function generateSeedBatchCodeAction()
    {
        $request = $this->getRequest();
        $form = $this->admin->getForm();
        $form->submit($request->request->get($form->getName()));
        $seedBatch = $form->getData();
        $generator = $this->getSeedBatchCodeGenerator();
        try {
            $code = $generator::generate($seedBatch);
            return new JsonResponse(['code' => $code]);
        } catch (InvalidSeedBatchCodeException $exc) {
            $error = $this->get('translator')->trans($exc->getMessage());
            return new JsonResponse(['error' => $error, 'generator' => $generator]);
        } catch (\Exception $exc) {
            $error = $exc->getMessage();
            return new JsonResponse(['error' => $error, 'generator' => $generator]);
        }
    }

    private function getSeedBatchCodeGenerator()
    {
        return $this->container->getParameter('librinfo_seed_batch')['code_generator']['seed_batch'];
    }
}
