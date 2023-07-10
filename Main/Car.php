<?php
/*
 * Abstract class extend olunduqda daxilindəki bütün method-lar istifadə edilməlidir
 * Abstract class-ın obyekti yaradıla bilməz
 * Abstract class-ın dəyişənləri özünü normal dəyişən kimi aparır (qarşısında public, static olmur)
 * Abstract method-un body hissəsi olmur
 */
abstract class Car
{
    public abstract function drive();
}